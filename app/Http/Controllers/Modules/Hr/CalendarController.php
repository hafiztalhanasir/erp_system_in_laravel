<?php

namespace App\Http\Controllers\Modules\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index() {
        $title = 'Calendar | HRM | '.config('app.name');
        return view('modules.hr.calendars.index', compact('title'));
    }

    public function add() {
        $data = array(
            'title' => 'Add Calendar',
        );
        return view('modules.hr.calendars.add', compact('data'));
    }
}
