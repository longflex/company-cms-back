<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactContent extends Model
{
    use HasFactory;
    protected $table = 'contact_content';

    protected $fillable = [
        'title',
        'title_hl',
        'badge',
    ];
}
