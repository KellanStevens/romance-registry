<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoAuthorizationPolicy
{
    use HandlesAuthorization;

    public function __call($method, $arguments)
    {
        return true;
    }
}
