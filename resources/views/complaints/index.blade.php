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
                        <a href="leave.html" class="btn btn-white btn-sm">Leave</a>
                        <a href="expenses.html" class="btn btn-white btn-sm">Expenses</a>
                        <a href="employee-request-complaints.html" class="btn btn-white btn-sm active">Employee request
                            & complaints </a>
                        <a href="attendance.html" class="btn btn-white btn-sm">Attendance </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Employee Request  </h5>
                            <div class="ibox-tools">

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
                                                <h5>Employee Request</h5>
                                                <div class="ibox-tools">

                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="form-group" id="data_1">
                                                    <label class="font-normal">Request Type</label>
                                                    <div class="input-group">
                                                        <input type="text" placeholder="Enter Request" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="font-normal">Request</label>
                                                    <div class="input-group">
                                                        <textarea type="text" class="form-control" placeholder="Enter Complaint" rows="5"></textarea>
                                                    </div>
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
                                                <h5>Complaints</h5>
                                                <div class="ibox-tools">

                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="ibox-content leave_apply">
                                                    <h3>Employee Complaints</h3>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <textarea type="text" class="form-control" placeholder="Enter Complaint" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4 col-sm-offset-2">
                                                            <button class="btn btn-white btn-sm"
                                                                    type="submit">Cancel</button>
                                                            <button class="btn btn-primary btn-sm"
                                                                    type="submit">Send</button>
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
    </div>
@endsection
