<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('locale', 3);
            $table->unsignedInteger('career_id')->nullable()->default(null);
            $table->string('name');
            $table->string('description');
            $table->string('position');
            $table->string('benefit');

            $table->foreign('career_id')
                ->references('id')->on('careers')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["career_id"]);

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
        Schema::dropIfExists('career_translations');
    }
}
