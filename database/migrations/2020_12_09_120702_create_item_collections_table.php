<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_collections', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('collection_id')->nullable()->default(null);
            $table->unsignedInteger('item_id')->nullable()->default(null);

            $table->foreign('collection_id')
                ->references('id')->on('collections')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["collection_id"]);
            $table->index(["item_id"]);

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
        Schema::dropIfExists('item_collections');
    }
}
