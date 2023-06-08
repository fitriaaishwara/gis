<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "clients";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'logo',
        'produk',
        'skema',
        'sertifikasi',
        'jenis',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
