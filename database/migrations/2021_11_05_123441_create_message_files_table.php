<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('message_id')->unsigned();
            $table->foreign('message_id')->references('id')->on('chat_messages')->onDelete('cascade');
            $table->string('file_path')->nullable();
            $table->string('poster')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('original_name')->nullable();
            $table->string('file_size')->nullable();
            $table->string('file_dimension')->nullable();
            $table->enum('type',['image','audio','video']);
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
        Schema::dropIfExists('message_files');
    }
}
