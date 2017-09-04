<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission',function(Blueprint $table){
            $table->integer('id');
            $table->string('permission_name');
            $table->string('permission_describe');
            $table->integer('status');//0表示可访问，1表示可授权
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission');
    }
}
