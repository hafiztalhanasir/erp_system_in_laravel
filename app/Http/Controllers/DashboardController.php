<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Dashboard | HRM | '.config('app.name');
        return view('modules.hr.dashboard', compact('title'));
    }
}
