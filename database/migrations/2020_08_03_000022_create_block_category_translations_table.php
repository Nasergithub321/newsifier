<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockCategoryTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'block_category_translations';

    /**
     * Run the migrations.
     * @table block_category_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('block_category_id')->nullable()->default(null);
            $table->char('locale', 2);
            $table->string('name');
            $table->text('description')->nullable()->default(null);

            $table->foreign('block_category_id')
                ->references('id')->on('block_categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["block_category_id"]);

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
