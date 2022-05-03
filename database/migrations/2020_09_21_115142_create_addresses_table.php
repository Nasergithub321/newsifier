<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'addresses';

    /**
     * Run the migrations.
     * @table addresses
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('telephone', 200)->nullable()->default(null);
            $table->string('mobile', 20)->nullable()->default(null);
            $table->string('summary', 200)->nullable()->default(null);
            $table->string('region', 200)->nullable()->default(null);
            $table->string('street', 200)->nullable()->default(null);
            $table->string('building', 200)->nullable()->default(null);
            $table->string('floor', 200)->nullable()->default(null);
            $table->string('nearby_landmark', 200)->nullable()->default(null);
            $table->string('latitude', 200)->nullable()->default(null);
            $table->string('longitude', 200)->nullable()->default(null);
            $table->string('fax', 20)->nullable()->default(null);
            $table->string('postal_box', 50)->nullable()->default(null);
            $table->integer("refer_id")->nullable();
            $table->string("refer_type", 200)->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->string('area', 200)->nullable();
            $table->integer('company_id')->default('1');

            $table->foreign('country_id')
                ->references('id')->on('countries')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->index(["country_id"]);
            $table->index(["city_id"]);

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
