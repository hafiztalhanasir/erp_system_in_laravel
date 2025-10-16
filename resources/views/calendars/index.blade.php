@extends('layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="nestable-menu">
                        <a href="index.html" class="btn btn-white btn-sm">All Employees</a>
                        <a href="notes-board.html" class="btn btn-white btn-sm">Notice Board</a>
                        <a href="calendar.html" class="btn btn-white btn-sm active">Vacations / Holiday calendar</a>
                        <a href="leave.html" class="btn btn-white btn-sm">Leave</a>
                        <a href="expenses.html" class="btn btn-white btn-sm">Expenses</a>
                        <a href="employee-request-complaints.html" class="btn btn-white btn-sm">Employee request
                            & complaints </a>
                        <a href="attendance.html" class="btn btn-white btn-sm">Attendance </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Vacations / Holiday calendar </h5>
                            <div class="ibox-tools">
                                <a href="add-holiday-calendar.html" class="btn btn-w-m btn-success">Add Holiday calendar</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
