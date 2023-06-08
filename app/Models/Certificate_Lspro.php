<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate_Lspro extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "certificate_lspro";
    protected $primaryKey = "id";
    protected $fillable = [
        'factory_name',
        'factory_address',
        'company_name',
        'company_address',
        'pic',
        'sni_number',
        'brand',
        'type',
        'result_of_test',
        'certificate_status',
        'first_surveillance',
        'second_surveillance',
        'third_surveillance',
        'reSertifikasi',
        'certificate_date',
        'expired_date',
        'note',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
