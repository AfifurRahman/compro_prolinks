<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterArtikelAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->integer('from')->nullable()->after('slug');
            $table->string('category_code', 50)->nullable()->after('slug');
            $table->string('meta_title')->nullable()->after('slug');
            $table->string('meta_description')->nullable()->after('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->integer('from')->nullable()->after('slug');
            $table->string('category_code', 50)->nullable()->after('slug');
            $table->string('meta_title')->nullable()->after('slug');
            $table->string('meta_description')->nullable()->after('slug');
        });
    }
}
