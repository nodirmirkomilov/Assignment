<?php

namespace App\Http\Controllers;

use App\Models\Startup;

class DashboardController extends Controller
{
    public function index()
    {
        $startups = Startup::paginate(10);
        return view('dashboard.pages.index',compact('startups'));
    }
}
