<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('instractors', function (Blueprint $table) {
            $table->id();
            $table->string('personal_image')->nullable();
            $table->string('name');
            $table->integer('age');
            $table->string('email');
            $table->string('phone1');
            $table->bigInteger('phone2')->nullable();
            $table->text('address');
            $table->text('informations');
            $table->integer('experience');

            $table->unsignedBigInteger('jobTitle_id');

            $table->foreign('jobTitle_id')->references('id')->on('job_titles');
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
        Schema::dropIfExists('instractors');
    }
}
