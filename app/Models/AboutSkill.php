<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSkill extends Model
{
    use HasFactory;
    protected $table = 'about_skill';

    protected $fillable = [
        'title',
        'icon',
        'amount',
        'order',
    ];
}
