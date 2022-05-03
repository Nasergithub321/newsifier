<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'orders';

    /**
     * Run the migrations.
     * @table orders
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('contact_name', 255)->nullable()->default(null);
            $table->string('contact_email', 255)->nullable()->default(null);
            $table->string('contact_phone_number', 50)->nullable()->default(null);
            $table->unsignedInteger('address_id')->nullable()->default(null);
            $table->string('type', 10)->nullable()->default(null);
            $table->integer('qty');
            $table->float('total', 19, 2);
            $table->float('subtotal', 19, 2)->nullable()->default(null);
            $table->string('details', 200)->nullable()->default(null);
            $table->float('discount_percentage', 19, 2)->nullable()->default(null);
            $table->float('discount_value', 19, 2)->nullable()->default(null);
            $table->float('delivery_cost', 19, 2)->nullable()->default(null);
            $table->dateTime('delivery_time');
            $table->float('vat', 19, 2)->nullable()->default(null);
            $table->float('vat_value', 19, 2)->nullable()->default(null);
            $table->float('total_before_vat', 19, 2)->nullable()->default(null);
            $table->dateTime('entry_date');
            $table->boolean('is_pickup')->default(false);
            $table->integer('payment_method');
            $table->string('order_key', 255);
            $table->unsignedInteger('status_id')->nullable()->default(null);
            $table->unsignedInteger('offer_id')->nullable()->default(null);
            $table->unsignedInteger('branch_id')->nullable()->default(null);
            $table->unsignedInteger('user_id')->nullable()->default(null);

            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('offer_id')
                ->references('id')->on('offers')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('branch_id')
                ->references('id')->on('branches')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["address_id"]);
            $table->index(["user_id"]);
            $table->index(["offer_id"]);
            $table->index(["branch_id"]);

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
