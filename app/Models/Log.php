<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        // $fillable を設定しておかないと、fill() で大量代入はブロックされる（安全対策）。
        'title',
        'start_date',
        'end_date',
        'tourist_spot',
        'food',
        'hotel',
        'money',
        'impressions',
        'tourist_spot_photo',
        'food_photo',
        'hotel_photo',
        'impressions_photo',
        'user_id',
        'country_id',
    ];
}
