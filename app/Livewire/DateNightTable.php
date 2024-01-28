<?php

namespace App\Livewire;

use App\Models\DateNight;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DateNightTable extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    public function render()
    {
        // Get DateNight data with Ratings and Users
        $dateNights = DateNight::all();

        return view('livewire.date-night-table', compact('dateNights'));
    }
}
