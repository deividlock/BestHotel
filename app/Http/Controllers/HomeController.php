<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Inertia\Inertia;

/**
 * Render the initial web page
 * 
 * @author Deivid Lockwood
 */
class HomeController extends Controller
{
    /**
     * Show the principal app page
     *
     * @return object
     */
    public function index(): object
    {      
        return Inertia::render('HomePage', [
            'data' => 'Bievenido'
        ]);
    }
}
