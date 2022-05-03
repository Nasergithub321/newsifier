<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentTranslationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'attachment_translations';

    /**
     * Run the migrations.
     * @table attachment_translations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('locale', 3);
            $table->string('title', 255);
            $table->text('description');
            $table->unsignedInteger('attachment_id')->nullable()->default(null);

            $table->foreign('attachment_id')
                ->references('id')->on('attachments')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->index(["attachment_id"]);

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
