<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date_night_id', 'price_rating', 'setting_rating', 'food_rating', 'comments'];

    public function date_night()
    {
        return $this->belongsTo(DateNight::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
