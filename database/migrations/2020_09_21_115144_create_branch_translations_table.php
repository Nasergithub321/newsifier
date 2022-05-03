<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'branch_translations';

    /**
     * Run the migrations.
     * @table branch_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('branch_id')->nullable()->default(null);
            $table->string('locale', 3);
            $table->string('name', 255);
            $table->text('address')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);

            $table->foreign('branch_id')
                ->references('id')->on('branches')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["branch_id"]);
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
