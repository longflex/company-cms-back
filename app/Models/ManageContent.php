<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageContent extends Model
{
    use HasFactory;
    protected $table = 'manage_content';

    protected $fillable = [
        'upper_title',
        'lower_title',
        'upper_desc',
        'lower_desc',
        'upper_title_hl',
        'lower_title_hl',
    ];
}
