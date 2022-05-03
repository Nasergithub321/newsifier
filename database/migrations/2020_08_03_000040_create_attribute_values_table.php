<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_values', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('attribute_id')->nullable()->default(null);

            $table->integer('record_order')->nullable()->default(null);
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('attribute_id')
                ->references('id')->on('attributes')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["attribute_id"]);

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
        Schema::dropIfExists('attribute_values');
    }
}
