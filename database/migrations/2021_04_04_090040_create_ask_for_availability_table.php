<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAskForAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_for_availabilities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255)->nullable()->default(null);
            $table->string('email', 255)->nullable()->default(null);
            $table->string('phone', 15)->nullable()->default(null);
            $table->text('note')->nullable()->default(null);
            $table->unsignedInteger('item_id')->nullable()->default(null);
            $table->unsignedInteger('batch_id')->nullable()->default(null);

            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["item_id"]);

            $table->foreign('batch_id')
                ->references('id')->on('batches')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["batch_id"]);

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
        Schema::dropIfExists('ask_for_availability');
    }
}
