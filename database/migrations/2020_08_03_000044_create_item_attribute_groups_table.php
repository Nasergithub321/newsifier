<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemAttributeGroupsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'item_attribute_groups';

    /**
     * Run the migrations.
     * @table item_attribute_groups
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('attribute_group_id')->nullable()->default(null);
            $table->unsignedInteger('item_id')->nullable()->default(null);

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('attribute_group_id')
                ->references('id')->on('attribute_groups')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["attribute_group_id"]);
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
