<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemCustomizationGroupsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'item_customization_groups';

    /**
     * Run the migrations.
     * @table item_customization_groups
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('item_id')->nullable()->default(null);
            $table->unsignedInteger('customization_group_id')->nullable()->default(null);

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('customization_group_id')
                ->references('id')->on('customization_groups')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["customization_group_id"]);
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
