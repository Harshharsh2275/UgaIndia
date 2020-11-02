<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('name',50);
            $table->string('email',80)->unique();
            $table->string('username',50)->unique();
            $table->string('password',65);
            $table->boolean('is_verified',1)->default(false);
            $table->boolean('is_super',1)->default(false);
            $table->rememberToken('remember_me');
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
        Schema::dropIfExists('admin');
    }
}
