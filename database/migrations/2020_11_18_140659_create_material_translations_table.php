<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('material_id')->unsigned()->nullable()->default(null);
            $table->string('locale', 3);
            $table->string('name', 200);
            $table->text('description')->nullable()->default(null);

            $table->foreign('material_id')
                ->references('id')->on('materials')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["material_id"]);

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
        Schema::dropIfExists('material_translations');
    }
}
