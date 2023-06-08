<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Article extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    protected $table = "articles";
    protected $primaryKey = "id";
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'slug',
        'date',
        'content',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function articleHeaders()
    {
        return $this->hasOne(ArticleHeader::class,'article_id');
    }

    public function articleKeywords()
    {
        return $this->hasOne(ArticleKeywords::class,'article_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
