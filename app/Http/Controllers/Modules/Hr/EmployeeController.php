<?php

namespace App\Http\Controllers\Modules\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $title = 'Employee | HRM | '.config('app.name');
        return view('modules.hr.employees.index', compact('title'));
    }

    public function add() {
        $data = array(
            'title' => 'Add Employee',
        );
        return view('modules.hr.employees.add', compact('data'));
    }

    public function edit() {
        $data = array(
            'title' => 'Edit Employee',
        );
        return view('modules.hr.employees.edit', compact('data'));
    }
}
