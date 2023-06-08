<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "gallery";
    protected $primaryKey = "id";
    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'created_by',
        'updated_by',
    ];
}
