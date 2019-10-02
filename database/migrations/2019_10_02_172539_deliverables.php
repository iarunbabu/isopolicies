<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Deliverables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('deliverables',function(Blueprint $table){
        $table->bigIncrements('id');
        $table->bigInteger('policy_id');
        $table->string('name');
        $table->string('description');
        $table->string('code');
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
        Schema::drop('deliverables');
    }
}
