<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'metadata';

    /**
     * Run the migrations.
     * @table metadata
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('meta_type_id')->nullable()->default(null);
            $table->morphs('referable');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('meta_type_id')
                ->references('id')->on('meta_types')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["meta_type_id"]);

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
