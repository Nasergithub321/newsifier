<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_type_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('item_type_id')->unsigned()->nullable()->default(null);
            $table->string('locale', 3);
            $table->string('title', 255);
            $table->text('description')->nullable()->default(null);

            $table->foreign('item_type_id')
                ->references('id')->on('item_types')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["item_type_id"]);

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
        Schema::dropIfExists('item_type_translations');
    }
}
