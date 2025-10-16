@extends('layouts.master')
@section('title', $title)
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                @include('layouts.includes.hr_navbar')
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Attendance Sheet </h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Basic Data Tables example with responsive plugin</h5>
                            </div>
                            <div class="ibox-content">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Check IN</th>
                                            <th>Check Out</th>
                                            <th>Over Time</th>
                                            <th>Late Coming</th>
                                            <th>Early Going</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="gradeX">
                                            <td>9:00 am</td>
                                            <td>7:00 pm</td>
                                            <td>1 hour</td>
                                            <td class="center">0 hour</td>
                                            <td class="center">0 mint</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>9:00 am</td>
                                            <td>6:00 pm</td>
                                            <td>0 hour</td>
                                            <td class="center">1 hour</td>
                                            <td class="center">0 mint</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>9:00 am</td>
                                            <td>5:15 pm</td>
                                            <td>0 hour</td>
                                            <td class="center">0 hour</td>
                                            <td class="center">45 mint</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>9:00 am</td>
                                            <td>7:00 pm</td>
                                            <td>1 hour</td>
                                            <td class="center">1 hour</td>
                                            <td class="center">15 mint</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>9:00 am</td>
                                            <td>7:00 pm</td>
                                            <td>1 hour</td>
                                            <td class="center">1 hour</td>
                                            <td class="center">15 mint</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>9:00 am</td>
                                            <td>7:00 pm</td>
                                            <td>1 hour</td>
                                            <td class="center">1 hour</td>
                                            <td class="center">15 mint</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>9:00 am</td>
                                            <td>7:00 pm</td>
                                            <td>1 hour</td>
                                            <td class="center">1 hour</td>
                                            <td class="center">15 mint</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>9:00 am</td>
                                            <td>7:00 pm</td>
                                            <td>1 hour</td>
                                            <td class="center">1 hour</td>
                                            <td class="center">15 mint</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>9:00 am</td>
                                            <td>7:00 pm</td>
                                            <td>1 hour</td>
                                            <td class="center">1 hour</td>
                                            <td class="center">15 mint</td>
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
@endsection
