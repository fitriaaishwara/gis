<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schema_Iso45001 extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "schema_iso45001";
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
        return $this->belongsTo(Category_Iso45001::class,'category_id');
    }


}
