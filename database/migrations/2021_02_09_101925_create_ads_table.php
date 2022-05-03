<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type', 15)->nullable();
            $table->string('action', 200)->nullable();
            $table->integer("refer_id")->nullable();
            $table->string("refer_type", 200)->nullable();
            $table->boolean("active")->default(false);
            $table->string("image", 200)->nullable();

            $table->integer('created_by');
            $table->integer('updated_by');

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
        Schema::dropIfExists('ads');
    }
}
