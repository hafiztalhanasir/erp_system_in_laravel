<?php

namespace App\Http\Controllers\Modules\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index() {
        $title = 'Complaint | HRM | '.config('app.name');
        return view('modules.hr.complaints.index', compact('title'));
    }

    public function add() {
        $data = array(
            'title' => 'Add Complaint',
        );
        return view('modules.hr.complaints.add', compact('data'));
    }
}
