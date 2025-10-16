@extends('layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="nestable-menu">
                        <a href="index.html" class="btn btn-white btn-sm">All Employees</a>
                        <a href="notes-board.html" class="btn btn-white btn-sm">Notice Board</a>
                        <a href="calendar.html" class="btn btn-white btn-sm">Vacations / Holiday calendar</a>
                        <a href="leave.html" class="btn btn-white btn-sm active">Leave</a>
                        <a href="expenses.html" class="btn btn-white btn-sm">Expenses</a>
                        <a href="employee-request-complaints.html" class="btn btn-white btn-sm">Employee request
                            & complaints </a>
                        <a href="attendance.html" class="btn btn-white btn-sm">Attendance </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Leave </h5>
                            <div class="ibox-tools">
                                <a href="#" class="btn btn-w-m btn-success">Add leave</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                                <span class="text-muted small float-right">Last
                                                    modification: <i class="fa fa-clock-o"></i> 2:10 pm
                                                    - 10.11.2023</span>
                                        <p>
                                            All Employees need to be verified before you can
                                            send email
                                            and set a project.
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ibox ">
                                            <div class="ibox-title">
                                                <h5>Apply Leave</h5>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="form-group" id="data_1">
                                                    <label class="font-normal">Leave Type</label>
                                                    <select class="select2_demo_1 form-control">
                                                        <option value="1">Sick</option>
                                                        <option value="2">Earned</option>
                                                        <option value="3">Half day</option>
                                                        <option value="4">Wedding</option>
                                                        <option value="5">Paternity</option>
                                                        <option value="5">Maternity</option>
                                                        <option value="5">Unpaid leave</option>
                                                    </select>
                                                </div>

                                                <div class="form-group" id="data_5">
                                                    <label class="font-normal">Range select</label>
                                                    <div class="input-daterange input-group" id="datepicker">
                                                        <input type="text" class="form-control-sm form-control"
                                                               name="start" value="05/14/2014" />
                                                        <span class="input-group-addon">to</span>
                                                        <input type="text" class="form-control-sm form-control"
                                                               name="end" value="05/22/2014" />
                                                    </div>
                                                </div>

                                                <div class="form-group" id="data_2">
                                                    <label class="font-normal">Reason</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-checkbox pmd-checkbox">
                                                    <input class="custom-control-input" type="checkbox" value=""
                                                           id="inverse_defaultCheck1">
                                                    <label class="custom-control-label"
                                                           for="inverse_defaultCheck1">
                                                        Is it a Half Day?
                                                    </label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4 col-sm-offset-2">
                                                        <button class="btn btn-white btn-sm"
                                                                type="submit">Cancel</button>
                                                        <button class="btn btn-primary btn-sm"
                                                                type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="ibox ">
                                            <div class="ibox-title">
                                                <h5>Check Your Leave</h5>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="ibox-content leave_apply">
                                                    <h3>Leave Application Approved & Not Approved</h3>
                                                    <label class="switch mt-4">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <div class="flot-chart">
                                                    <h2 class="text-center w-100">Holiday chart</h2>
                                                    <div class="ibox-content">
                                                        <div id="ct-chart1" class="ct-perfect-fourth"></div>
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
        </div>
    </div>
@endsection
