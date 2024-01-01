<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostDependenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('post_dependencies', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['1', '2', '3']);
            $table->string('src');

            $table->unsignedBigInteger('post_id');

            $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::dropIfExists('post_dependencies');
    }
}
