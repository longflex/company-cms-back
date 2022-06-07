<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSpecialty extends Model
{
    use HasFactory;
    protected $table = 'about_specialty';

    protected $fillable = [
        'title',
        'img',
        'desc',
        'order',
    ];
}
