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
        
        Schema::create('Pemohon', function (Blueprint $table) {
      $table->increments('id');
        $table->string('No_antrian');
        $table->enum('layanan', ['Pendaftaran', 'SKCK Online', 'Verifikasi','Difabel' ,'Pengaduan']);
        $table->string('nama_lengkap');
        $table->string('tempat_lahir');
        $table->string('tanggal_lahir');
        $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);//
        $table->string('kebangsaan');
        $table->enum('agama', ['Islam', 'Kristen', 'Katholik','Hindu' ,'Budha','Konghucu','Kepercayaan Terhadap Tuhan YME']);
        $table->string('Alamat_lengkap');
        $table->string('NIK');
        $table->string('no_paspor');
        $table->string('pekerjaan');
        $table->string('sidikjari');
        $table->string('catatanpolri');
        $table->string('keperluan');
        $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
$table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
    });

        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pemohon')->unsigned();
            $table->foreign('id_pemohon')->references('id')->on('pemohon')->onDelete('cascade');
            $table->string('no_antrian');
            $table->string('nama');
            $table->string('keperluan');
            $table->enum('status', ['dilayani', 'dilewati', 'tidak terlayani' , 'ditolak', 'selesai']);  
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrian');
    }
};
