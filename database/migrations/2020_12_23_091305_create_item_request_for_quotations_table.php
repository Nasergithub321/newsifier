<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemRequestForQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_request_for_quotations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('request_for_quotation_id')->nullable()->default(null);
            $table->unsignedInteger('item_id')->nullable()->default(null);
            $table->unsignedInteger('batch_id')->nullable()->default(null);
            $table->boolean('finishing')->nullable()->default(null);
            $table->integer('qty')->nullable()->default(null);
            $table->text('customize_requirements')->nullable()->default(null);

            $table->foreign('request_for_quotation_id')
                ->references('id')->on('request_for_quotations')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('batch_id')
                ->references('id')->on('batches')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["request_for_quotation_id"]);
            $table->index(["item_id"]);
            $table->index(["batch_id"]);

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
        Schema::dropIfExists('item_request_for_quotations');
    }
}
