<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleHeader extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = 'article_headers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'article_id',
        'image',
        'alt',
        'title_header',
        'link',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
