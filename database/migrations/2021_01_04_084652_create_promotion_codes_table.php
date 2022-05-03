<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_codes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->unsignedInteger('user_id')->nullable()->default(null);
            $table->string('code', 10)->unique();
            $table->decimal('discount_rate', 9, 2)->nullable()->default(null);
            $table->integer('max_use')->nullable()->default(null);
            $table->boolean('active')->default(true)->nullable()->default(null);
            $table->dateTime('from_date')->nullable()->default(null);
            $table->dateTime('to_date')->nullable()->default(null);

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["user_id"]);

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
        Schema::dropIfExists('promotion_codes');
    }
}
