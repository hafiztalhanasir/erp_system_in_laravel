<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Modules\Hr\AttendanceController;
use App\Http\Controllers\Modules\Hr\CalendarController;
use App\Http\Controllers\Modules\Hr\ComplaintController;
use App\Http\Controllers\Modules\Hr\EmployeeController;
use App\Http\Controllers\Modules\Hr\ExpenseController;
use App\Http\Controllers\Modules\Hr\LeaveController;
use App\Http\Controllers\Modules\Hr\NoticeboardController;


Route::get('/employee',                     [EmployeeController::class, 'index'])               ->name('employee.index');
Route::get('/employee/add',                 [EmployeeController::class, 'add'])                 ->name('employee.add');
Route::get('/employee/edit',                [EmployeeController::class, 'edit'])                ->name('employee.edit');
Route::get('/notice-board',                 [NoticeboardController::class, 'index'])            ->name('notice_board.index');
Route::get('/notice-board/add',             [NoticeboardController::class, 'add'])              ->name('notice_board.add');
Route::get('/calendar',                     [CalendarController::class, 'index'])               ->name('calendar.index');
Route::get('/calendar/add',                 [CalendarController::class, 'add'])                 ->name('calendar.add');
Route::get('/leave',                        [LeaveController::class, 'index'])                  ->name('leave.index');
Route::get('/leave/add',                    [LeaveController::class, 'add'])                    ->name('leave.add');
Route::get('/expense',                      [ExpenseController::class, 'index'])                ->name('expense.index');
Route::get('/expense/add-daily-expense',    [ExpenseController::class, 'add_daily_expense'])    ->name('expense.add_daily_expense');
Route::get('/expense/add-payroll',          [ExpenseController::class, 'add_payroll'])          ->name('expense.add_payroll');
Route::get('/expense/payroll-detail',       [ExpenseController::class, 'payroll_detail'])       ->name('expense.payroll_detail');
Route::get('/request-complaint',            [ComplaintController::class, 'index'])              ->name('complaint.index');
Route::get('/request-complaint/add',        [ComplaintController::class, 'add'])                ->name('complaint.add');
Route::get('/attendance',                   [AttendanceController::class, 'index'])             ->name('attendance.index');
Route::get('/attendance/add',               [AttendanceController::class, 'add'])               ->name('attendance.add');

