<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('ads_id')->nullable();
            $table->string('locale', 3)->nullable();
            $table->string("title", 200)->nullable();
            $table->text("description")->nullable();

            $table->foreign('ads_id')
                ->references('id')->on('ads')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["ads_id"]);

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
        Schema::dropIfExists('ads_trnaslations');
    }
}
