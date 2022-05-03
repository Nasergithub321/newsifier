<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pages';

    /**
     * Run the migrations.
     * @table pages
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug', 255);
            $table->text('link1')->nullable()->default(null);
            $table->text('link2')->nullable()->default(null);
            $table->string('image', 255)->nullable()->default(null);
            $table->string('type', 15)->nullable()->default(null);
            $table->unsignedInteger('branch_id')->nullable()->default(null);
            $table->integer('record_order')->nullable()->default(null);
            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

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
