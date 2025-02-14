<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountactOne extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
         'about', 'photo', 'cover_photo', 'first_name', 'last_name', 
        'email', 'country', 'street_address', 'city', 'state', 'zip_code', 
        'by_email', 'push_notifications'
    ];
}
