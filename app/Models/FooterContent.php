<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterContent extends Model
{
    use HasFactory;
    protected $table = 'footer_content';

    protected $fillable = [
        'title',
        'title_hl',
        'all_rights',
        'all_rights_link',
        'all_rights_addr',
    ];
}
