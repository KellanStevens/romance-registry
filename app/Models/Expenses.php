<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $primaryKey = 'ExpenseID';

    protected $fillable = ['DateNightID', 'ExpenseDate', 'ExpenseDescription', 'Amount'];

    public function dateNight()
    {
        return $this->belongsTo(DateNight::class, 'DateNightID');
    }
}
