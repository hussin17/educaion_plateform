<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->text('description');
            $table->float('price')->nullable();
            $table->float('discount')->nullable();

            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('major_id')->nullable();
            $table->unsignedBigInteger('instractor_id');
            $table->unsignedBigInteger('level_id');

            $table->dateTime('start');
            $table->dateTime('end');
            $table->integer('hours');

            $table->foreign('cat_id')->references('id')->on('categories');
            $table->foreign('major_id')->references('id')->on('majors');
            $table->foreign('instractor_id')->references('id')->on('instractors');
            $table->foreign('level_id')->references('id')->on('levels');

            $table->dateTime('date_added');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
