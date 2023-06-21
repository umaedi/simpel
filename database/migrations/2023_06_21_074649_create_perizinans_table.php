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
        Schema::create('perizinans', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('perizinan_id');
            $table->string('nama_perusahaan');
            $table->string('nib');
            $table->string('tgl_terbit');
            $table->string('uraian_status_penanaman_modal');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('proyek_id');
            $table->string('kd_resiko');
            $table->string('kbli');
            $table->string('tgl_izin');
            $table->string('jenis_perizinan');
            $table->string('nama_dokumen');
            $table->string('uraian_kewenangan');
            $table->string('uraian_status');
            $table->string('kewenangan');
            $table->string('kl_sektor');
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
        Schema::dropIfExists('perizinans');
    }
};
