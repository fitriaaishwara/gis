<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate_Ispo extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "certificate_ispo";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_perusahaan',
        'alamat_perusahaan',
        'lingkup',
        'no_sertifikat',
        'lokasi_pabrik',
        'lokasi_kebun',
        'titik_koordinat_lokasi',
        'luas_kebun',
        'total_produksi',
        'model_rantai_pemasok',
        'certificate_date',
        'expired_date',
        'certificate_status',
        'first_surveillance',
        'second_surveillance',
        'third_surveillance',
        'fourth_surveillance',
        'reSertifikasi',
        'note',

    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
