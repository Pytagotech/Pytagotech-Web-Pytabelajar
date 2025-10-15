<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Testimony;

class HomeController extends Controller
{
    public function index()
    {
        
        $services = Service::latest()->get();
        $testimonies = Testimony::with('user')->latest()->take(6)->get();
        return view('pages.index', compact('services', 'testimonies'));
    }
}
