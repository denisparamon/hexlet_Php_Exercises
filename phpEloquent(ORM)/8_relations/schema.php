<?php

namespace App\config\schema;

use Illuminate\Database\Capsule\Manager as Capsule;

function load()
{
    if (Capsule::schema()->hasTable('post_likes')) {
        Capsule::schema()->drop('post_likes');
    }

    if (Capsule::schema()->hasTable('posts')) {
        Capsule::schema()->drop('posts');
    }

    if (Capsule::schema()->hasTable('users')) {
        Capsule::schema()->drop('users');
    }

    Capsule::schema()->create('users', function ($table) {
        $table->bigIncrements('id');
        $table->string('email')->unique();
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->string('password')->nullable();
        $table->timestamps();
    });

    Capsule::schema()->create('posts', function ($table) {
        $table->bigIncrements('id');
        $table->string('state')->nullable();
        $table->string('title');
        $table->text('body');
        $table->bigInteger('creator_id');
        $table->foreign('creator_id')->references('id')->on('users');
        $table->timestamps();
    });

    Capsule::schema()->create('post_likes', function ($table) {
        $table->bigIncrements('id');
        $table->bigInteger('creator_id');
        $table->bigInteger('post_id');
        $table->foreign('creator_id')->references('id')->on('users');
        $table->foreign('post_id')->references('id')->on('posts');
        $table->timestamps();
    });
}
