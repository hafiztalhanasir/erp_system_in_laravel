<?php

namespace App\Http\Controllers\Modules\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index() {
        $title = 'Expense | HRM | '.config('app.name');
        return view('modules.hr.expenses.index', compact('title'));
    }

    public function add_daily_expense() {
        $title = 'Add Daily Expense | HRM | '.config('app.name');
        return view('modules.hr.expenses.add_daily_expenses', compact('title'));
    }

    public function add_payroll() {
        $title = 'Add Payroll | HRM | '.config('app.name');
        return view('modules.hr.expenses.add_payroll', compact('title'));
    }

    public function payroll_detail() {
        $title = 'Payroll Detail | HRM | '.config('app.name');
        return view('modules.hr.expenses.payroll_detail', compact('title'));
    }
}
