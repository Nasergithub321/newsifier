<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'offer_translations';

    /**
     * Run the migrations.
     * @table offer_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('offer_id')->nullable()->default(null);
            $table->string('locale', 3);
            $table->string('title',255);
            $table->text('description')->nullable()->default(null);

            $table->index(["offer_id"]);

            $table->foreign('offer_id')
                ->references('id')->on('offers')
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
        Schema::dropIfExists($this->tableName);
    }
}
