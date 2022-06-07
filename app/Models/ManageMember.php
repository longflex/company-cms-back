<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageMember extends Model
{
    use HasFactory;
    protected $table = 'manage_member';

    protected $fillable = [
        'member_name',
        'member_prof',
        'image',
        'desc',
        'order',
    ];
}
