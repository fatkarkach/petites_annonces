<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces_users', function (Blueprint $table) {
            $table->bigInteger('annonces_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('annonces_id')->references('id')->on('annonces');
            $table->foreign('users_id')->references('id')->on('users');
            //date de creation 
            $table->primary(['annonces_id','users_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
