<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @throws Exception When config can't be loaded
     * @return void
     */
    public function up()
    {
        $tableNames  = config('permission.table_names');
        $columnNames = config('permission.column_names');

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        Schema::create($tableNames['permissions'],
            function (Blueprint $table) {
                $table->uuid('uuid')
                    ->primary();
                $table->string('name');
                $table->string('guard_name');
                $table->timestamps();
            });

        Schema::create($tableNames['roles'],
            function (Blueprint $table) {
                $table->uuid('uuid')
                    ->primary();
                $table->string('name');
                $table->string('guard_name');
                $table->timestamps();
            });

        Schema::create($tableNames['model_has_permissions'],
            function (Blueprint $table) use ($tableNames, $columnNames) {
                $table->uuid('uuid');

                $table->string('model_type');
                $table->uuid($columnNames['model_morph_key']);
                $table->index([
                    $columnNames['model_morph_key'],
                    'model_type',
                ],
                    'model_has_permissions_model_uuid_model_type_index');

                $table->foreign('uuid')
                    ->references('uuid')
                    ->on($tableNames['permissions'])
                    ->onDelete('cascade');

                $table->primary([
                    'uuid',
                    $columnNames['model_morph_key'],
                    'model_type',
                ],
                    'model_has_permissions_permission_model_type_primary');
            });

        Schema::create($tableNames['model_has_roles'],
            function (Blueprint $table) use ($tableNames, $columnNames) {
                $table->uuid('uuid');

                $table->string('model_type');
                $table->uuid($columnNames['model_morph_key']);
                $table->index([
                    $columnNames['model_morph_key'],
                    'model_type',
                ],
                    'model_has_roles_model_uuid_model_type_index');

                $table->foreign('uuid')
                    ->references('uuid')
                    ->on($tableNames['roles'])
                    ->onDelete('cascade');

                $table->primary([
                    'uuid',
                    $columnNames['model_morph_key'],
                    'model_type',
                ],
                    'model_has_roles_role_model_type_primary');
            });

        Schema::create($tableNames['role_has_permissions'],
            function (Blueprint $table) use ($tableNames) {
                $table->uuid('uuid');

                $table->foreign('uuid')
                    ->references('uuid')
                    ->on($tableNames['permissions'])
                    ->onDelete('cascade');

                // TODO fix the second relation
//                $table->foreign('uuid')
//                    ->references('uuid')
//                    ->on($tableNames['roles'])
//                    ->onDelete('cascade');

                $table->primary([
                    'uuid',
                ],
                    'role_has_permissions_permission_uuid_role_uuid_primary');
            });

        app('cache')
            ->store(
                config('permission.cache.store') != 'default'
                    ? config('permission.cache.store')
                    : null
            )
            ->forget(config('permission.cache.key'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
        }

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
}
