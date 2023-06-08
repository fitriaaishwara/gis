<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate_pasarRakyat extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "certificate_pasar_rakyat";
    protected $primaryKey = "id";
    protected $fillable = [
        'namaPasar',
        'alamatPasar',
        'tipePasar',
        'mutuPasar',
        'nomorSNI',
        'direksi',
        'certificate_status',
        'first_surveillance',
        'second_surveillance',
        'reSertifikasi',
        'certificate_date',
        'certificate_date_period',
        'expired_date',
        'note',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
