<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchDetailsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'batch_details';

    /**
     * Run the migrations.
     * @table batch_details
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('batch_id')->nullable()->default(null);
            $table->unsignedInteger('attribute_id')->nullable()->default(null);
            $table->unsignedInteger('attribute_value_id')->nullable()->default(null);
            $table->string('custom_value', 255)->nullable()->default(null);

            $table->foreign('batch_id')
                ->references('id')->on('batches')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('attribute_id')
                ->references('id')->on('attributes')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('attribute_value_id')
                ->references('id')->on('attribute_values')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["attribute_id"]);
            $table->index(["attribute_value_id"]);
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
       Schema::dropIfExists($this->tableName);
     }
}
