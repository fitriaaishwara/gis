<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipePengajuan extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $table = 'tipe_pengajuan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'type',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function pengajuan()
    {
        return $this->hasMany(pengajuanMail::class);
    }
}
