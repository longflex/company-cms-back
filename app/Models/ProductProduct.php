<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProduct extends Model
{
    use HasFactory;
    protected $table = 'product_product';

    protected $fillable = [
        'title_1',
        'title_2',
        'title_3',
        'title_4',
        'desc_1',
        'desc_2',
        'desc_3',
        'desc_4',
        'badge',
        'title',
        'title_hl',
        'desc',
        'image',
        'order',
    ];
}
