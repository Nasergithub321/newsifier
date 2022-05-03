<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_materials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('item_id')->nullable()->default(null);
            $table->unsignedInteger('material_id')->nullable()->default(null);

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('material_id')
                ->references('id')->on('materials')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["material_id"]);
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
        Schema::dropIfExists('item_materials');
    }
}
