<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'articles';

    /**
     * Run the migrations.
     * @table articles
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
            $table->string('slug',255);
            $table->string('name',255);
            $table->date('post_date');
            $table->text('description')->nullable()->default(null);
            $table->string('image',255)->nullable()->default(null);
            $table->string('file',255)->nullable()->default(null);
            $table->tinyInteger('visible')->default('1');
            $table->unsignedInteger('branch_id')->nullable()->default(null);
            $table->integer('record_order')->nullable()->default(null);
            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('article_category_id')
                ->references('id')->on('article_categories')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('branch_id')
                ->references('id')->on('branches')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["branch_id"]);
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
