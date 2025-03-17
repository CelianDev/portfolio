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

    public function competences(Request $request): Response
    {
        return Inertia::render('Portfolio', [
            'content' => 'competences',
            'title' => 'Compétences',
        ]);
    }

    public function cybersecurite(Request $request): Response
    {
        return Inertia::render('Portfolio', [
            'content' => 'cybersecurite',
            'title' => 'Compétences',
        ]);
    }

    public function contact(Request $request): Response
    {
        return Inertia::render('Portfolio', [
            'content' => 'contact',
            'title' => 'Contact',
        ]);
    }

    public function proEntreprise(Request $request): Response
    {
        return Inertia::render('Portfolio', [
            'content' => 'pro-entreprise',
            'title' => 'Réalisation Pro Entreprise',
        ]);
    }

    public function proCentre(Request $request): Response
    {
        return Inertia::render('Portfolio', [
            'content' => 'pro-centre',
            'title' => 'Réalisation Pro Centre',
        ]);
    }
}
