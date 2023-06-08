<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatePasarRakyatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_pasar_rakyat', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('namaPasar');
            $table->string('alamatPasar');
            $table->string('tipePasar');
            $table->string('mutuPasar');
            $table->string('nomorSNI');
            $table->string('direksi');
            $table->tinyInteger('certificate_status');
            $table->date('first_surveillance')->nullable();
            $table->date('second_surveillance')->nullable();
            $table->date('reSertifikasi')->nullable();
            $table->date('certificate_date');
            $table->date('certificate_date_period');
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
        Schema::dropIfExists('certificate_pasar_rakyat');
    }
}
