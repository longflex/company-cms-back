<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeProductSpecialty extends Model
{
    use HasFactory;
    protected $table = 'home_product_specialty';

    protected $fillable = [
        'title',
        'desc',
        'image',
        'order',
    ];
}
