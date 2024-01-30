<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'location', 'google_maps_link', 'description'];

    public function date()
    {
        return $this->belongsTo(Date::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
