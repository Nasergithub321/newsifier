<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomizationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'customizations';

    /**
     * Run the migrations.
     * @table customizations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('customization_group_id')->unsigned()->nullable()->default(null);
            $table->integer('type')->nullable()->default(null);
            $table->decimal('added_value', 19, 2)->nullable()->default(null);
            $table->integer('record_order')->nullable()->default(null);
            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('customization_group_id')
                ->references('id')->on('customization_groups')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["customization_group_id"]);
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
