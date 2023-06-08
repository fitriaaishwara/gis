<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = 'message';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pengajuan_id',
        'email',
        'name',
        'phone_number',
        'subject',
        'message',
    ];

    public function pengajuan()
    {
        return $this->belongsTo(TipePengajuan::class, 'pengajuan_id');
    }
}

