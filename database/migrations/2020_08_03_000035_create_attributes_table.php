<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'attributes';

    /**
     * Run the migrations.
     * @table attributes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('attribute_group_id')->nullable()->default(null);
            $table->string('default_value', 255)->nullable()->default(null);
            $table->integer('type')->nullable()->default(null);
            $table->integer('record_order')->nullable()->default(null);
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('attribute_group_id')
                ->references('id')->on('attribute_groups')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["attribute_group_id"]);

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
