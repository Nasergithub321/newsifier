<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoryTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'article_category_translations';

    /**
     * Run the migrations.
     * @table article_category_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('article_category_id')->nullable()->default(null);
            $table->char('locale', 2);
            $table->string('name',255);
            $table->text('description')->nullable()->default(null);

            $table->foreign('article_category_id')
                ->references('id')->on('article_categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["article_category_id"]);

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
