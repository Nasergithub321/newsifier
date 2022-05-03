<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestForQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_for_quotations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->default(null);
            $table->string('name', 255)->nullable()->default(null);
            $table->string('phone', 20)->nullable()->default(null);
            $table->string('email', 255)->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->unsignedInteger('country_id')->nullable()->default(null);

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('country_id')
                ->references('id')->on('countries')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["user_id"]);
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
        Schema::dropIfExists('request_for_quotations');
    }
}
