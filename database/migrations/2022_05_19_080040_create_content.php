<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type_content')->comment = "1 => Why Chooes Us, 2 => What Makse Us Uniq, 3 => Who We Are, 4 => Finance Services";
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->text('link')->nullable();
            $table->text('image')->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('value1', 255)->nullable();
            $table->string('value2', 255)->nullable();
            $table->string('value3', 255)->nullable();
            $table->string('value4', 255)->nullable();
            $table->string('value5', 255)->nullable();
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
        Schema::dropIfExists('content');
    }
}
