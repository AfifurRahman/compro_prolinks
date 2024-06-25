<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('jabatan', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('no_hp1', 25)->nullable();
            $table->string('no_hp2', 25)->nullable();
            $table->text('alamat')->nullable();
            $table->string('slug', 255)->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->string('link_fb', 255)->nullable();
            $table->string('link_twitter', 255)->nullable();
            $table->string('link_ig', 255)->nullable();
            $table->string('link_linkedin', 255)->nullable();
            $table->string('link_google', 255)->nullable();
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
        Schema::dropIfExists('team');
    }
}
