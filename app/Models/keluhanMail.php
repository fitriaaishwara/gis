<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class keluhanMail extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $table = 'keluhan_mail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'name',
        'subject',
        'message',
    ];
}
