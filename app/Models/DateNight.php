<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DateNight extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'location', 'google_maps_link', 'description'];

    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }

    // Method to delete DateNight along with its ratings and expenses
    public function deleteWithRelationships(): void
    {
        $this->ratings()->delete(); // Delete related ratings
        $this->expenses()->delete(); // Delete related expenses
        $this->photos()->update(['date_night_id' => null]); // Detach related photos

        $this->delete(); // Delete DateNight
    }
}
