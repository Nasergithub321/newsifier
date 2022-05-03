<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->unsignedInteger('career_id')->nullable()->default(null);
            $table->unsignedInteger('user_id')->nullable()->default(null);

            $table->string('name', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('cv', 200);

            $table->integer('updated_by')->nullable()->default(null);
            $table->enum('status' , ['pending','accepted' , 'rejected' ,'archived'])->default('pending');

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('applications', function($table)
        {
            $table->index(["career_id"]);
            $table->index(["user_id"]);

            $table->foreign('career_id')
                ->references('id')->on('careers')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
