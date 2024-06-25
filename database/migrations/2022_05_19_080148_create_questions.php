<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_depan', 255)->nullable();
            $table->string('nama_belakang', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('no_hp', 50)->nullable();
            $table->text('pesan')->nullable();
            $table->string('jabatan', 255)->nullable();
            $table->string('industri', 255)->nullable();
            $table->text('pesan_balasan')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps($precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
