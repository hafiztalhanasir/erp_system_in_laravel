<?php

namespace App\Http\Controllers\Modules\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index() {
        $title = 'Leave | HRM | '.config('app.name');
        return view('modules.hr.leaves.index', compact('title'));
    }

    public function add() {
        $data = array(
            'title' => 'Add Leave',
        );
        return view('modules.hr.leaves.add', compact('data'));
    }
}
