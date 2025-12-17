<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'article_id';
    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
    ];
    protected $guarded = ['article_id'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $visible = [
        'title',
        'description',
        'article_id',
    ];
}
