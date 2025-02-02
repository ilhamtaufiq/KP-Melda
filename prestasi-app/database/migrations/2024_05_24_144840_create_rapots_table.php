<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rapots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_siswa')->unsigned();
            $table->foreign('id_siswa')->references('id')->on('siswas')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_wali_kelas')->unsigned();
            $table->foreign('id_wali_kelas')->references('id')->on('wali_kelass')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_mapel')->unsigned();
            $table->foreign('id_mapel')->references('id')->on('mapels')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('nilai_pengetahuan');
            $table->string('huruf_pengetahuan');
            $table->integer('nilai_keterampilan');
            $table->string('huruf_keterampilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapots');
    }
};
