<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleKeywords extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = 'article_keywords';
    protected $primaryKey = 'id';
    protected $fillable = [
        'article_id',
        'keyword',
    ];
}
