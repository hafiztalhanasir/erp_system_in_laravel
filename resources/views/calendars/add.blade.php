@extends('layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="nestable-menu">
                        <a href="index.html"
                           class="btn btn-white btn-sm">All
                            Employees</a>
                        <a href="notes-board.html"
                           class="btn btn-white btn-sm">Notice
                            Board</a>
                        <a href="calendar.html"
                           class="btn btn-white btn-sm  active">Vacations /  Holiday calendar</a>
                        <a href="leave.html"
                           class="btn btn-white btn-sm">Leave</a>
                        <a href="expenses.html"
                           class="btn btn-white btn-sm">Expenses</a>
                        <a href="employee-request-complaints.html"
                           class="btn btn-white btn-sm">Employee
                            request
                            & complaints </a>
                        <a href="attendance.html"
                           class="btn btn-white btn-sm">Attendance
                        </a>
                        <a href="add-holiday-calendar.html" class="float-right btn btn-primary" title="Go Back"><i class="fa fa-backward"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Add Notice </h5>
                        </div>
                        <div class="ibox-content">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Add Holiday Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Add Public Holidays</label>
                                            <input type="date"
                                                   placeholder="last Name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Description</label>
                                            <textarea type="text"
                                                      placeholder="Add Notice Description"
                                                      class="form-control" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <div class="form-group row">
                                            <div
                                                class="col-sm-4 col-sm-offset-2">
                                                <button
                                                    class="btn btn-white "
                                                    type="submit">Cancel</button>
                                                <button
                                                    class="btn btn-primary"
                                                    type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
