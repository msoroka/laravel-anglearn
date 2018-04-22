<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_package', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('package_id')->unsigned();
            $table->integer('word_id')->unsigned();
            $table->timestamps();


        });

        Schema::table('word_package', function($table) {
            $table->foreign('package_id')
                ->references('id')
                ->on('packages');
            $table->foreign('word_id')
                ->references('id')
                ->on('words');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('word_package');
    }
}
