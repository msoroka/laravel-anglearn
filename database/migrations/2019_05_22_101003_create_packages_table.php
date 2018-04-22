<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->integer('language1_id')->unsigned();
            $table->integer('language2_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('subcategories', function($table) {
//            $table->foreign('user_id')
//                ->references('id')
//                ->on('users');
//            $table->foreign('language1_id')
//                ->references('id')
//                ->on('languages');
//            $table->foreign('language2_id')
//                ->references('id')
//                ->on('languages');
//            $table->foreign('subcategory_id')
//                ->references('id')
//                ->on('subcategories');
//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
