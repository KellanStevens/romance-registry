<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    protected $primaryKey = 'RatingID';

    protected $fillable = ['DateNightID', 'Price', 'Setting', 'Food', 'TextRating'];

    public function dateNight()
    {
        return $this->belongsTo(DateNight::class, 'DateNightID');
    }
}
