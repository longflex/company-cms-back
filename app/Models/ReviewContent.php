<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewContent extends Model
{
    use HasFactory;
    protected $table = 'review_content';

    protected $fillable = [
        'upper_desc',
        'auther_name',
        'auther_prof',
        'lower_title',
        'lower_desc',
        'img',
    ];
}
