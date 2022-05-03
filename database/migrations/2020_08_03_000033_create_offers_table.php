<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'offers';

    /**
     * Run the migrations.
     * @table offers
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('item_id')->nullable()->default(null);
            $table->date('from_date');
            $table->date('to_date');
            $table->float('discount_percentage', 9, 2)->nullable()->default(0);
            $table->float('discount_value', 9, 2)->nullable()->default(0);
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
        Schema::dropIfExists($this->tableName);
    }
}
