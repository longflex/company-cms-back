<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeKeyProductSpecialty extends Model
{
    use HasFactory;
    protected $table = 'home_keyproduct_specialty';

    protected $fillable = [
        'title',
        'desc',
        'icon',
        'order',
    ];
}
