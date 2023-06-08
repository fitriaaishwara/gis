<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengajuanMail extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = 'pengajuan_mail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'type',
        'email',
        'type',
        'subject',
        'message',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function categories()
    {
        return $this->belongsTo(TipePengajuan::class, 'type');
    }
}
