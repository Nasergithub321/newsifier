<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'metadata_translations';

    /**
     * Run the migrations.
     * @table metadata_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('locale', 3);
            $table->string('title', 255);
            $table->string('keywords', 255)->nullable()->default(null);
            $table->string('meta_content', 255)->nullable()->default(null);
            $table->unsignedInteger('metadata_id')->nullable()->default(null);

            $table->foreign('metadata_id')
                ->references('id')->on('metadata')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["metadata_id"]);

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
