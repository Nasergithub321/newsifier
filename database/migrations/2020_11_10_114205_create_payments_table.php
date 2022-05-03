<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('order_id')->nullable();

            $table->float('total', 9, 2);
            $table->integer('payment_method');
            $table->string('order_reference', 255)->nullable()->default(null);
            $table->string('payment_reference', 255)->nullable()->default(null);
            $table->string('payment_status', 50)->nullable()->default("PENDING");
            $table->dateTime('date_time');
            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["user_id"]);
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
        Schema::dropIfExists('payments');
    }
}
