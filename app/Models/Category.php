<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = [
        'name','description','statuses'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }


}
