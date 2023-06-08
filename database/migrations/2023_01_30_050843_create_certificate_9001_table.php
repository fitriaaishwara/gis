<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificate9001Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_9001', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('company_name');
            $table->string('company_address');
            $table->string('scope');
            $table->string('restriction');
            $table->string('pic');
            $table->tinyInteger('certificate_status');
            $table->date('first_surveillance')->nullable();
            $table->date('second_surveillance')->nullable();
            $table->date('certificate_date');
            $table->date('issue_date');
            $table->date('expired_date');
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
        Schema::dropIfExists('certificate_9001');
    }
}
