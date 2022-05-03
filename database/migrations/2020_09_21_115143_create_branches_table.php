<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'branches';

    /**
     * Run the migrations.
     * @table branches
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('branch_code', 5);
            $table->dateTime('creation_date')->nullable()->default(null);

            $table->string('email', 50)->nullable()->default(null);
            $table->string('latitude', 200)->nullable()->default(null);
            $table->string('longitude', 200)->nullable()->default(null);
            $table->string('telephone', 200)->nullable()->default(null);
            $table->string('mobile', 20)->nullable()->default(null);
            $table->string('fax', 20)->nullable()->default(null);

            $table->string('image', 200)->nullable()->default(null);
            $table->boolean('active')->default(false);
            $table->boolean('is_open')->default(false);

            $table->unsignedInteger('country_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->unsignedInteger('area_id')->nullable();

            $table->integer('company_id')->default('1');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->foreign('country_id')
                ->references('id')->on('countries')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('set null')
                ->onUpdate('cascade');


            $table->foreign('area_id')
                ->references('id')->on('areas')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["country_id"], 'branch_country_id');
            $table->index(["city_id"], 'branch_city_id');
            $table->index(["area_id"], 'branch_area_id');

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
