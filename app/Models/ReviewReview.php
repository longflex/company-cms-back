<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewReview extends Model
{
    use HasFactory;
    protected $table = 'review_review';

    protected $fillable = [
        'auther_name',
        'auther_prof',
        'image',
        'desc',
        'order',
    ];
}
