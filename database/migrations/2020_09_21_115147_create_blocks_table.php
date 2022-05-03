<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'blocks';

    /**
     * Run the migrations.
     * @table blocks
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('block_category_id')->nullable()->default(null);
            $table->string('slug',255);
            $table->date('post_date')->nullable()->default(null);
            $table->string('url',255)->nullable()->default(null);
            $table->string('image',255)->nullable()->default(null);
            $table->string('file', 255)->nullable()->default(null);
            $table->unsignedInteger('branch_id')->nullable()->default(null);
            $table->tinyInteger('visible')->default('1');
            $table->integer('record_order')->nullable()->default(null);;
            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('block_category_id')
                ->references('id')->on('block_categories')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('branch_id')
                ->references('id')->on('branches')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["block_category_id"]);
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
