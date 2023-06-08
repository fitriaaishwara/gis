<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_UjiLab extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "category_uji_lab";
    protected $primaryKey = "id";
    protected $fillable = [
        'category_name', 'category_description',
    ];
}
