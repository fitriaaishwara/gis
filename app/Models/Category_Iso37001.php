<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_Iso37001 extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "category_iso37001";
    protected $primaryKey = "id";
    protected $fillable = [
        'category_name', 'category_description',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function schemaIso37001()
    {
        return $this->hasMany(Schema_Iso37001::class);
    }
}
