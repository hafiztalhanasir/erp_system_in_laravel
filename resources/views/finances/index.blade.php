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
                        <a href="expenses.html" class="btn btn-white btn-sm active">Finance</a>
                        <a href="employee-request-complaints.html" class="btn btn-white btn-sm">Employee request
                            & complaints </a>
                        <a href="attendance.html" class="btn btn-white btn-sm">Attendance </a>
                        <a href="add-holiday-calendar.html" class="float-right btn btn-primary" title="Go Back"><i class="fa fa-backward"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ibox-content">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox ">
                                        <div class="ibox-title">
                                            <h5>Finance</h5>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="tabs-container">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Daily Expenses</a></li>
                                                    <li><a class="nav-link" data-toggle="tab" href="#tab-2">Monthly Expenses</a></li>
                                                    <li><a class="nav-link" data-toggle="tab" href="#tab-3">Payroll</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" id="tab-1" class="tab-pane active">
                                                        <div class="ibox-tools">
                                                            <a href="add-daily-expenses.html" class="btn btn-w-m btn-success">Add Daily Expenses</a>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-striped table-bordered table-hover dataTables-example">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Description</th>
                                                                        <th>Debit</th>
                                                                        <th>Credit</th>
                                                                        <th>B/F Balance</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="gradeX">
                                                                        <td>11/16/2023</td>
                                                                        <td>1000</td>
                                                                        <td class="center">5,000</td>
                                                                        <td>000,000</td>
                                                                        <td>500,000</td>
                                                                    </tr>
                                                                    <tr class="gradeX">
                                                                        <td>11/17/2023</td>
                                                                        <td>1000</td>
                                                                        <td class="center">5,000</td>
                                                                        <td>000,000</td>
                                                                        <td>000,000</td>
                                                                    </tr>
                                                                    <tr class="gradeX">
                                                                        <td>11/18/2023</td>
                                                                        <td>1000</td>
                                                                        <td class="center">5,000</td>
                                                                        <td>000,000</td>
                                                                        <td>500,000</td>
                                                                    </tr>
                                                                    <tr class="gradeX">
                                                                        <td>11/19/2023</td>
                                                                        <td>1000</td>
                                                                        <td class="center">5,000</td>
                                                                        <td>000,000</td>
                                                                        <td>200,000</td>
                                                                    </tr>
                                                                    <tr class="gradeX">
                                                                        <td>11/20/2023</td>
                                                                        <td>1000</td>
                                                                        <td class="center">5,000</td>
                                                                        <td>000,000</td>
                                                                        <td>100,000</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" id="tab-2" class="tab-pane">
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-striped table-bordered table-hover dataTables-example">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Petty Cash</th>
                                                                        <th>Electricity</th>
                                                                        <th>PTCL</th>
                                                                        <th>Fuel</th>
                                                                        <th>Rent</th>
                                                                        <th>Datails</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="gradeX">
                                                                        <td>11/2023</td>
                                                                        <td>500,000</td>
                                                                        <td>100,000</td>
                                                                        <td>10,000</td>
                                                                        <td>100,000</td>
                                                                        <td><a href="#">View Details</a></td>
                                                                    </tr>
                                                                    <tr class="gradeX">
                                                                        <td>12/2023</td>
                                                                        <td>500,000</td>
                                                                        <td>100,000</td>
                                                                        <td>10,000</td>
                                                                        <td>100,000</td>
                                                                        <td><a href="#">View Details</a></td>
                                                                    </tr>
                                                                    <tr class="gradeX">
                                                                        <td>1/2023</td>
                                                                        <td>500,000</td>
                                                                        <td>100,000</td>
                                                                        <td>10,000</td>
                                                                        <td>100,000</td>
                                                                        <td><a href="#">View Details</a></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" id="tab-3" class="tab-pane">
                                                        <div class="ibox-tools">
                                                            <a href="add-payroll.html" class="btn btn-w-m btn-success">Add Payroll</a>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Sr no</th>
                                                                        <th>Name</th>
                                                                        <th>month</th>
                                                                        <th>Department</th>
                                                                        <th>Designation</th>
                                                                        <th>Last Working Day</th>
                                                                        <th>Status</th>
                                                                        <th>Joining Date</th>
                                                                        <th>Basic Salary</th>
                                                                        <th>Travel Allowance</th>
                                                                        <th>Medical Allowance</th>
                                                                        <th>-</th>
                                                                        <th>Per Day Rate</th>
                                                                        <th>Per Hour Rate</th>
                                                                        <th>Late Coming Fine</th>
                                                                        <th>Early Going Fine / Late coming</th>
                                                                        <th>Unpaid Leaves</th>
                                                                        <th>Unpaid Leaves Deduction</th>
                                                                        <th>Extra Payment</th>
                                                                        <th>Other Deductions</th>
                                                                        <th>Net Salary</th>
                                                                        <th>Annual Salary</th>
                                                                        <th>Taxable / Non-Taxable</th>
                                                                        <th>Tax Deducted</th>
                                                                        <th>Salary Payable</th>
                                                                        <th>Details</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="gradeX">
                                                                        <td>001</td>
                                                                        <td>Maria Chughtai</td>
                                                                        <td>Nov-23</td>
                                                                        <td>Management</td>
                                                                        <td>HR & Admin Manager</td>
                                                                        <td>--</td>
                                                                        <td>---</td>
                                                                        <td>4/7/2021</td>
                                                                        <td>15,000</td>
                                                                        <td>10,000</td>
                                                                        <td>10,000</td>
                                                                        <td>50,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>50,000</td>
                                                                        <td>600000</td>
                                                                        <td>Non-taxable</td>
                                                                        <td>0</td>
                                                                        <td>50,000</td>
                                                                        <td><a href="salarysheet.html">View Detail</a></td>
                                                                    </tr>
                                                                    <tr class="gradeC">
                                                                        <td>001</td>
                                                                        <td>Maria Chughtai</td>
                                                                        <td>Nov-23</td>
                                                                        <td>Management</td>
                                                                        <td>HR & Admin Manager</td>
                                                                        <td>--</td>
                                                                        <td>---</td>
                                                                        <td>4/7/2021</td>
                                                                        <td>15,000</td>
                                                                        <td>10,000</td>
                                                                        <td>10,000</td>
                                                                        <td>50,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>50,000</td>
                                                                        <td>600000</td>
                                                                        <td>Non-taxable</td>
                                                                        <td>0</td>
                                                                        <td>50,000</td>
                                                                        <td><a href="salarysheet.html">View Detail</a></td>
                                                                    </tr>
                                                                    <tr class="gradeA">
                                                                        <td>001</td>
                                                                        <td>Maria Chughtai</td>
                                                                        <td>Nov-23</td>
                                                                        <td>Management</td>
                                                                        <td>HR & Admin Manager</td>
                                                                        <td>--</td>
                                                                        <td>---</td>
                                                                        <td>4/7/2021</td>
                                                                        <td>15,000</td>
                                                                        <td>10,000</td>
                                                                        <td>10,000</td>
                                                                        <td>50,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>50,000</td>
                                                                        <td>600000</td>
                                                                        <td>Non-taxable</td>
                                                                        <td>0</td>
                                                                        <td>50,000</td>
                                                                        <td><a href="salarysheet.html">View Detail</a></td>
                                                                    </tr>
                                                                    <tr class="gradeU">
                                                                        <td>001</td>
                                                                        <td>Maria Chughtai</td>
                                                                        <td>Nov-23</td>
                                                                        <td>Management</td>
                                                                        <td>HR & Admin Manager</td>
                                                                        <td>--</td>
                                                                        <td>---</td>
                                                                        <td>4/7/2021</td>
                                                                        <td>15,000</td>
                                                                        <td>10,000</td>
                                                                        <td>10,000</td>
                                                                        <td>50,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>50,000</td>
                                                                        <td>600000</td>
                                                                        <td>Non-taxable</td>
                                                                        <td>0</td>
                                                                        <td>50,000</td>
                                                                        <td><a href="salarysheet.html">View Detail</a></td>
                                                                    </tr>
                                                                    <tr class="gradeM">
                                                                        <td>001</td>
                                                                        <td>Maria Chughtai</td>
                                                                        <td>Nov-23</td>
                                                                        <td>Management</td>
                                                                        <td>HR & Admin Manager</td>
                                                                        <td>--</td>
                                                                        <td>---</td>
                                                                        <td>4/7/2021</td>
                                                                        <td>15,000</td>
                                                                        <td>10,000</td>
                                                                        <td>10,000</td>
                                                                        <td>50,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>00,000</td>
                                                                        <td>50,000</td>
                                                                        <td>600000</td>
                                                                        <td>Non-taxable</td>
                                                                        <td>0</td>
                                                                        <td>50,000</td>
                                                                        <td><a href="salarysheet.html">View Detail</a></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
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
    </div>
@endsection
