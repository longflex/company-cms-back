<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;
    protected $table = 'home_content';

    protected $fillable = [
        'main_text',
        'main_text_hl',
        'main_desc',
        'main_desc_hl',
        'anim_1',
        'anim_2',
        'main_image',
        'key_product',
        'key_product_image',
        'key_product_badge',
        'product_intro_text',
        'product_intro_text_hl',
        'product_intro_desc',
        'product_ad_text',
        'product_ad_text_hl',
        'product_ad_desc',
    ];
}
