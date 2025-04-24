<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date_night_id', 'price_rating', 'setting_rating', 'food_rating', 'comments'];

    public function occasion()
    {
        return $this->belongsTo(Occasion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
