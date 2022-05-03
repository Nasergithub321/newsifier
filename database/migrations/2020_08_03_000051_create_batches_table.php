<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'batches';

    /**
     * Run the migrations.
     * @table batches
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('item_id')->nullable()->default(null);
            $table->string('batch', 255)->nullable()->default(null);
            $table->string('barcode', 255)->nullable()->default(null);
            $table->float('price', 9, 2)->nullable()->default(null);
            $table->string('dimension', 255)->nullable()->default(null);
            $table->float('length', 9,2)->nullable()->default(null);
            $table->float('width', 9,2)->nullable()->default(null);
            $table->float('height', 9,2)->nullable()->default(null);
            $table->float('weight', 9,2)->nullable()->default(null);
            $table->string('image', 255)->nullable()->default(null);
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
