<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomizationGroupTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'customization_group_translations';

    /**
     * Run the migrations.
     * @table customization_group_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('locale', 3);
            $table->unsignedInteger('customization_group_id')->nullable()->default(null);
            $table->string('title', 255);
            $table->text('description')->nullable()->default(null);

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
