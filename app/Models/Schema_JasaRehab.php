<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schema_JasaRehab extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "schema_jasa_rehab";
    protected $primaryKey = "id";
    protected $fillable = [
        'category_id', 'lingkup', 'deskripsi', 'status_schema', 'status'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function categories()
    {
        return $this->belongsTo(Category_JasaRehab::class,'category_id');
    }
}
