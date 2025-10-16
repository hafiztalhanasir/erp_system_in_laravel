<?php

namespace App\Http\Controllers\Modules\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index() {
        $title = 'Attendance | HRM | '.config('app.name');
        return view('modules.hr.attendances.index', compact('title'));
    }

    public function add() {
        $data = array(
            'title' => 'Add Attendance',
        );
        return view('modules.hr.attendances.add', compact('data'));
    }
}
