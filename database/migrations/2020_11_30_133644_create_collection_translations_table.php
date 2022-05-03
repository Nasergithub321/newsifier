<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('collection_id')->unsigned()->nullable()->default(null);
            $table->string('locale', 3);
            $table->string('name', 200);
            $table->text('description')->nullable()->default(null);

            $table->foreign('collection_id')
                ->references('id')->on('collections')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["collection_id"]);

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
        Schema::dropIfExists('collection_translations');
    }
}
