<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class OccasionController extends Controller
{
    public function show(): Response
    {
        return Inertia::render('Occasions/Show');
    }

    public function create(): Response
    {
        return Inertia::render('Occasions/Create');
    }

    public function index(): Response
    {
        return Inertia::render('Occasions/Index');
    }
}
