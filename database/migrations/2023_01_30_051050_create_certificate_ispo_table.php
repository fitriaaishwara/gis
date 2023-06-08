<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateIspoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_ispo', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('lingkup');
            $table->string('no_sertifikat');
            $table->string('lokasi_pabrik');
            $table->string('lokasi_kebun');
            $table->string('titik_koordinat_lokasi');
            $table->string('luas_kebun');
            $table->string('total_produksi');
            $table->string('model_rantai_pemasok');
            $table->date('certificate_date');
            $table->date('expired_date');
            $table->tinyInteger('certificate_status');
            $table->date('first_surveillance')->nullable();
            $table->date('second_surveillance')->nullable();
            $table->date('third_surveillance')->nullable();
            $table->date('fourth_surveillance')->nullable();
            $table->date('reSertifikasi')->nullable();
            $table->string('note');
            $table->string('status')->default(1);
            $table->char('created_by')->nullable();
            $table->char('updated_by')->nullable();
            $table->char('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificate_ispo');
    }
}
