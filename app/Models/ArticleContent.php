<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleContent extends Model
{
    use HasFactory;
    protected $table = 'article_content';

    protected $fillable = [
        'title',
        'title_hl',
        'desc',
    ];
}
