<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('branch_id')->nullable()->default(null);
            $table->dateTime('to_date')->nullable()->default(null);
            $table->dateTime('from_date')->nullable()->default(null);
            $table->string('telephone', 50)->nullable()->default(null);
            $table->integer('salary');
            $table->string('image', 150)->nullable()->default(null);

            $table->integer('created_by');
            $table->integer('updated_by');

            $table->index(["branch_id"], 'careers_FK_1');

            $table->foreign('branch_id', 'careers_FK_1')
                ->references('id')->on('branches')
                ->onDelete('set null')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('careers');
    }
}
