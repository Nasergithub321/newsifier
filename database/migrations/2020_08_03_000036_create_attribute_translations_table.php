<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'attribute_translations';

    /**
     * Run the migrations.
     * @table attribute_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('attribute_id')->nullable()->default(null);
            $table->string('locale', 3);
            $table->string('name',255);

            $table->foreign('attribute_id')
                ->references('id')->on('attributes')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["attribute_id"]);

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
