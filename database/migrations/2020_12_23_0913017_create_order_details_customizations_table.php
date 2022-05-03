<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsCustomizationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'order_details_customizations';

    /**
     * Run the migrations.
     * @table order_details_customizations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('order_id')->nullable()->default(null);
            $table->unsignedInteger('order_details_id')->nullable()->default(null);
            $table->unsignedInteger('customization_id')->nullable()->default(null);
            $table->decimal('added_value', 19, 2)->nullable()->default(null);
            $table->integer('company_id');

            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('order_details_id')
                ->references('id')->on('order_details')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('customization_id')
                ->references('id')->on('customizations')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["customization_id"]);
            $table->index(["order_details_id"]);
            $table->index(["order_id"]);

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
