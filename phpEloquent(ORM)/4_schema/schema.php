<?php

namespace App\config\schema;

use Illuminate\Database\Capsule\Manager as Capsule;

function load()
{
    if (!Capsule::schema()->hasTable('users')) {
        Capsule::schema()->create('users', function ($table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    if (!Capsule::schema()->hasTable('posts')) {
        Capsule::schema()->create('posts', function ($table) {
            $table->bigIncrements('id');
            $table->string('state')->nullable();
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
    }
}
