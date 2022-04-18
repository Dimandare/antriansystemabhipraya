<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
        });
      
        Schema::create('video', function (Blueprint $table) {
            $table->id();
            $table->string('nama_video');
            $table->string('url');
            $table->timestamps();
        });
        Schema::create('info', function (Blueprint $table) {
            $table->id();
            $table->string('judul_info');
            $table->string('isi_info');
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
        Schema::dropIfExists('users');
    }
};
