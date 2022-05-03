<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTranslationsTable extends Migration
{
    public $tableName = 'area_translations';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('locale', 3);
            $table->unsignedInteger('area_id')->nullable()->default(null);
            $table->string('name', 255);

            $table->foreign('area_id')
                ->references('id')->on('areas')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["area_id"]);
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
