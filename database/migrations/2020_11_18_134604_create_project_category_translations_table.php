<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectCategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_category_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('project_category_id')->unsigned()->nullable()->default(null);
            $table->string('locale', 3);
            $table->string('title', 255);
            $table->text('description')->nullable()->default(null);

            $table->foreign('project_category_id')
                ->references('id')->on('project_categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["project_category_id"]);

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
        Schema::dropIfExists('project_category_translations');
    }
}
