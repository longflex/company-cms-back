<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewCustomer extends Model
{
    use HasFactory;
    protected $table = 'review_customer';

    protected $fillable = [
        'image',
        'order',
    ];
}
