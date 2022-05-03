<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeGroupTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public $tableName = 'attribute_group_translations';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('locale', 3);
            $table->unsignedInteger('attribute_groups_id')->nullable()->default(null);
            $table->string('name',255);
            $table->text('description')->nullable()->default(null);

            $table->foreign('attribute_groups_id')
                ->references('id')->on('attribute_groups')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["attribute_groups_id"]);

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
