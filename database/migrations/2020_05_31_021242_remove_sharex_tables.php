<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveSharexTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn('domain');
            $table->dropColumn('api_key');
        });

        Schema::dropIfExists('sharex_screenshots');
        Schema::dropIfExists('sharex_news');
        Schema::dropIfExists('sharex_register');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('domain')->nullable();
            $table->string('api_key', 60)->nullable();
        });

        Schema::create('sharex_register', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token', 200);
            $table->timestamps();
        });

        Schema::create('sharex_screenshots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('domain')->default('https://hoopless.xyz');
            $table->string('image_name')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });

        Schema::create('sharex_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200);
            $table->string('content', 2000);
            $table->timestamps();
        });
    }
}
