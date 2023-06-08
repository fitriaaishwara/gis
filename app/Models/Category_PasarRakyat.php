<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_PasarRakyat extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "category_pasar_rakyat";
    protected $primaryKey = "id";
    protected $fillable = [
        'category_name', 'category_description',
    ];

    public function schema_PasarRakyat()
    {
        return $this->hasMany(Schema_PasarRakyat::class);
    }
}
