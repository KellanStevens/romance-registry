<?php

namespace App\Policies;

use App\Models\DateNight;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Carbon;

class DateNightPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Anyone can view
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, DateNight $dateNight): bool
    {
        // Anyone can view
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Check if the user is either user 1 or 2
        if ($user->id !== 1 && $user->id !== 2) {
            abort(403, 'You are not authorized to create a DateNight.');
        }

        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, DateNight $dateNight): bool
    {
        // Check if the user is either user 1 or 2
        if ($user->id !== 1 && $user->id !== 2) {
            abort(403, 'You are not authorized to delete this DateNight.');
        }

        // Check if the creation date of the DateNight is within the last week
        $weekAgo = Carbon::now()->subWeek();
        if (Carbon::parse($dateNight->created_at)->lt($weekAgo)) {
            abort(403, 'You can only delete DateNights created within the last week.');
        }

        // All conditions met, allow deletion
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, DateNight $dateNight): bool
    {
        // Check if the user is either user 1 or 2
        if ($user->id !== 1 && $user->id !== 2) {
            abort(403, 'You are not authorized to delete this DateNight.');
        }

        // Check if the creation date of the DateNight is within the last week
        $weekAgo = Carbon::now()->subWeek();
        if (Carbon::parse($dateNight->created_at)->lt($weekAgo)) {
            abort(403, 'You can only delete DateNights created within the last week.');
        }

        // All conditions met, allow deletion
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, DateNight $dateNight): bool
    {
        return $user->id == 1 || $user->id == 2;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, DateNight $dateNight): bool
    {
        return $user->id == 1 || $user->id == 2;
    }
}
