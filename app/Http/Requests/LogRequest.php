<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'log.title' => 'required|string|max:100',
            'log.tourist_spot' => 'required|string|max:50',
            'log.food' => 'required|string|max:50',
            'log.money' => 'required|string|max:50',
            'log.impressions' => 'required|string|max:1000',
            'tourist_spot_photo' => 'required|image|max:5120',
            'food_photo' => 'required|image|max:5120',
            'hotel_photo' => 'required|image|max:5120',
            'impressions_photo' => 'required|image|max:5120',
        ];
    }
}
