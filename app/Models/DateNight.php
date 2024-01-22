<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateNight extends Model
{
    use HasFactory;

    protected $primaryKey = 'DateNightID';

    protected $fillable = ['Date', 'Location', 'GoogleMapsLink', 'Description'];

    public function ratings()
    {
        return $this->hasOne(Ratings::class, 'DateNightID');
    }

    public function expenses()
    {
        return $this->hasMany(Expenses::class, 'DateNightID');
    }
}
