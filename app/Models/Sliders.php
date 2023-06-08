<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sliders extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "sliders";
    protected $primaryKey = "id";
    protected $fillable = [
        'image','status','order_by','title','button_text','button_link', 'button_status'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
