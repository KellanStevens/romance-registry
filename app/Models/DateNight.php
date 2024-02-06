<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateNight extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'location', 'google_maps_link', 'description'];

    public function expense()
    {
        return $this->hasMany(Expense::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
