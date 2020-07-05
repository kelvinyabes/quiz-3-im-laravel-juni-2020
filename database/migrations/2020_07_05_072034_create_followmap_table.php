<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowmapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followmap', function (Blueprint $table) {
            $table->unsignedBigInteger('idfollower_map');
            $table->foreign('idfollower_map')->references('iduser')->on('users');
            $table->integer('idfollower');
            $table->integer('idfollowing');
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
        Schema::dropIfExists('followmap');
    }
}
