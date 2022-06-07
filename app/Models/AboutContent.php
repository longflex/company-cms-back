<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    use HasFactory;
    protected $table = 'about_content';

    protected $fillable = [
        'upper_title',
        'lower_title',
        'upper_desc_1',
        'upper_desc_2',
        'lower_desc',
        'upper_title_hl',
        'lower_title_hl',
        'upper_desc_1_hl',
        'img',
    ];
}
