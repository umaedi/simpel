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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opd_id');
            $table->string('name');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->text('alamat');
            $table->string('indikator_1');
            $table->string('indikator_2');
            $table->string('indikator_3');
            $table->string('indikator_4');
            $table->string('indikator_5');
            $table->string('indikator_6');
            $table->string('indikator_7');
            $table->string('indikator_8');
            $table->string('indikator_9');
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
        Schema::dropIfExists('surveys');
    }
};
