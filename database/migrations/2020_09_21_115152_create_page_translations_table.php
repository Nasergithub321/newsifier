<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'page_translations';

    /**
     * Run the migrations.
     * @table page_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('page_id')->nullable()->default(null);
            $table->string('locale', 3);
            $table->string('name',255);
            $table->text('description')->nullable()->default(null);
            $table->string('file',255)->nullable()->default(null);

            $table->foreign('page_id')
                ->references('id')->on('pages')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["page_id"]);

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
