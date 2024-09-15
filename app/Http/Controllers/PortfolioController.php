<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PortfolioController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('Portfolio', [
            'content' => 'home',
            'title' => 'Home',
        ]);
    }

    public function cv(Request $request): Response
    {
        return Inertia::render('Portfolio', [
            'content' => 'cv',
            'title' => 'CV',
        ]);
    }
}
