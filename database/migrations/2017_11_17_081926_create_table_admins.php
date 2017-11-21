<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('admins', function($table)
          {
              $table->increments('id');
               $table->string('username', 100)->unique();
               $table->string('email', 100)->unique();
               $table->string('password', 64);
               $table->rememberToken();
               $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:drop('admins');
    }
}
