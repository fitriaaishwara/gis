<?php

namespace App\Models;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PopUp extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "pop_up";
    protected $primaryKey = "id";
    protected $fillable = [
        'image','url','time','status','created_by','updated_by','deleted_by'
    ];
}
