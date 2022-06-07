<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInfo extends Model
{
    use HasFactory;
    protected $table = 'general_info';

    protected $fillable = [
        'logo',
        'brand_name',
        'home_bg',
        'about_bg',
        'work_bg',
        'service_bg',
        'client_bg',
        'review_bg',
        'contact_bg',
    ];
}
