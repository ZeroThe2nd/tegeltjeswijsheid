<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTables extends Migration
{
    public function up()
    {
        Schema::create('tags',
            function (Blueprint $table) {
                $table->uuid('uuid')->primary();
                $table->json('name');
                $table->json('slug');
                $table->string('type')->nullable();
                $table->integer('order_column')->nullable();
                $table->timestamps();
            });

        Schema::create('taggables',
            function (Blueprint $table) {
                $table->uuid('tag_uuid');
                $table->morphs('taggable');

                $table->unique([
                    'tag_uuid',
                    'taggable_id',
                    'taggable_type',
                ]);

                $table->foreign('tag_uuid')
                    ->references('uuid')
                    ->on('tags')
                    ->onDelete('cascade');
            });
    }

    public function down()
    {
        Schema::drop('taggables');
        Schema::drop('tags');
    }
}
