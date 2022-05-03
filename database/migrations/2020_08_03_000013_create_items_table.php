<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'items';

    /**
     * Run the migrations.
     * @table items
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable()->default(null);
            $table->string('slug', 255)->nullable()->default(null);
            $table->string('code', 25)->nullable()->default(null);
            $table->string('barcode', 25)->nullable()->default(null);
            $table->integer('type_id')->unsigned()->nullable()->default(null);
            $table->boolean('new')->default(false);
            $table->boolean('old')->default(false);
            $table->boolean('popular')->default(false);
            $table->boolean('coming_soon')->default(false);
            $table->boolean('active')->default(false);
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->string('image', 255)->nullable()->default(null);
            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('type_id')
                ->references('id')->on('item_types')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["category_id"]);
            $table->index(["type_id"]);

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
