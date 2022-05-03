<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('item_id')->nullable()->default(null);
            $table->unsignedInteger('batch_id')->nullable()->default(null);
            $table->unsignedInteger('branch_id')->default(1);
            $table->string('type', 3)->nullable()->default(null);
            $table->integer('quantity')->nullable()->default(null);
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('batch_id')
                ->references('id')->on('batches')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["item_id"]);
            $table->index(["batch_id"]);

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
        Schema::dropIfExists('inventory_transactions');
    }
}
