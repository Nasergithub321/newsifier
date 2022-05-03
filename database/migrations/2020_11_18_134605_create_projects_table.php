<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('project_category_id')->nullable()->default(null);
            $table->string('slug', 255);
            $table->string('scope', 255)->nullable()->default(null);
            $table->string('location', 255);
            $table->text('testimonial')->nullable()->default(null);
            $table->string('image', 255)->nullable()->default(null);
            $table->string('file', 255)->nullable()->default(null);
            $table->integer('record_order')->nullable()->default(null);
            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

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
        Schema::dropIfExists('projects');
    }
}
