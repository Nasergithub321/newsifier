<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public $tableName = 'country_translations';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('locale', 3);
            $table->unsignedInteger('country_id')->nullable()->default(null);
            $table->string('name', 255);

            $table->foreign('country_id', 'fk_country_translations_1_idx')
                ->references('id')->on('countries')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["country_id"]);
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
