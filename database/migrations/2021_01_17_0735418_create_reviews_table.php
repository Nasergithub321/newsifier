<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer("refer_id")->nullable();
            $table->string("refer_type", 200)->nullable();
            $table->integer("rating_1")->nullable();
            $table->integer("rating_2")->nullable();
            $table->integer("rating_3")->nullable();
            $table->integer("rating_4")->nullable();
            $table->integer("rating_5")->nullable();
            $table->text("review")->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->softDeletes();
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
        Schema::dropIfExists('reviews');
    }
}
