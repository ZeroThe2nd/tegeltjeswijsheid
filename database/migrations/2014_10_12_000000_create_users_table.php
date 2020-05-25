<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',
            function (Blueprint $table) {
                $table->uuid('uuid')
                    ->primary()
                    ->unique();
                $table->string('handle');
                $table->string('username');
                $table->string('email')
                    ->unique();
                $table->timestamp('email_verified_at')
                    ->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->boolean('is_active')
                    ->default(true);
                $table->boolean('is_banned')
                    ->default(false);
                $table->text('ban_reason')
                    ->nullable();
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
        Schema::dropIfExists('users');
    }
}
