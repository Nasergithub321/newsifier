<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    public $tableName = 'areas';

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
            $table->unsignedInteger('city_id')->nullable();
            $table->string('latitude', 255)->nullable()->default(null);
            $table->string('longitude', 255)->nullable()->default(null);
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["city_id"]);
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
