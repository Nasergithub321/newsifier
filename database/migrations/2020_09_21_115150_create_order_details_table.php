<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'order_details';

    /**
     * Run the migrations.
     * @table order_details
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('qty');
            $table->float('subtotal', 9, 2)->nullable()->default(null);
            $table->float('discount_percentage', 19, 2)->nullable()->default(null);
            $table->float('discount_value', 19, 2)->nullable()->default(null);
            $table->float('batch_price', 19, 2)->nullable()->default(null);
            $table->float('total', 19, 2)->nullable()->default(null);
            $table->float('vat_value', 19, 2)->nullable()->default(null);
            $table->float('total_before_vat', 19, 2)->nullable()->default(null);
            $table->integer('type')->nullable()->default(null);
            $table->unsignedInteger('order_id')->nullable()->default(null);
            $table->unsignedInteger('item_id')->nullable()->default(null);
            $table->unsignedInteger('batch_id')->nullable()->default(null);
            $table->unsignedInteger('offer_id')->nullable()->default(null);
            $table->integer('company_id')->default('1');

            $table->foreign('order_id')
                ->references('id')->on('orders')
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

            $table->foreign('offer_id')
                ->references('id')->on('addresses')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["item_id"]);
            $table->index(["batch_id"]);
            $table->index(["order_id"]);
            $table->index(["offer_id"]);

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
        Schema::dropIfExists($this->tableName);
    }
}
