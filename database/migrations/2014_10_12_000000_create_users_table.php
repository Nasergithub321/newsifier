<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name', 255);
            $table->string('middle_name', 255)->nullable()->default(null);
            $table->string('last_name', 255);
            $table->string('phone_number', 25)->nullable()->default(null);
            $table->boolean('gender')->default(null);
            $table->date('dob')->nullable()->default(null);
            $table->string('image', 255)->nullable()->default(null);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->tinyInteger('email_confirmed')->nullable()->default(null);
            $table->tinyInteger('phone_number_confirmed')->nullable()->default(null);
            $table->string('push_user_id', 255)->nullable()->default(null);
            $table->string('push_token', 255)->nullable()->default(null);
            $table->string('r_code', 255)->nullable()->default(null);
            $table->string('prefer_locale', 3)->default(config('app.locale'));
            $table->boolean('active')->default(true);
            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
