<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemberMeta extends Migration
{
    
    public function up()
    {
        Schema::create('member_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('memberUserId')->comment('')->nullable();
            $table->string('name', 30)->comment('')->nullable();
            $table->string('value', 1000)->comment('')->nullable();

            $table->unique(['memberUserId', 'name']);

        });
    }

    
    public function down()
    {
    }
}
