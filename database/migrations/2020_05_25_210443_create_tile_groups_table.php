<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTileGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tile_groups', function (Blueprint $table) {
            $table->uuid('uuid')
                ->primary();
            $table->uuid('owner_uuid');
            $table->string('handle')
                ->comment('Public handle for the group');
            $table->text('description')
                ->comment('Public description');
            $table->boolean('is_public')
                ->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tile_groups');
    }
}
