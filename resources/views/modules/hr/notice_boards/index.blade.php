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
                            <h5>Notice Board </h5>
                            <div class="ibox-tools">
                                <a href="{{route('notice_board.add')}}" class="btn btn-w-m btn-success">Add Notice</a>
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
                                    <div class="col-lg-12">
                                        <ul class="notes">
                                            <li>
                                                <div>
                                                    <small>12:03:28 12-04-2023</small>
                                                    <h4>Long established fact</h4>
                                                    <p>The years, sometimes by accident,
                                                        sometimes on purpose (injected humour
                                                        and the like).</p>
                                                    <a href="#"><i class="fa fa-trash-o "></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <small>11:08:33 16-04-2023</small>
                                                    <h4>Latin professor at Hampden-Sydney </h4>
                                                    <p>The first line of Lorem Ipsum, "Lorem
                                                        ipsum dolor sit amet..", comes from a
                                                        line in section 1.10.32.</p>
                                                    <a href="#"><i class="fa fa-trash-o "></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <small>9:12:28 10-04-2023</small>
                                                    <h4>The standard chunk of Lorem</h4>
                                                    <p>Ipsum used since the 1500s is reproduced
                                                        below for those interested.</p>
                                                    <a href="#"><i class="fa fa-trash-o "></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <small>3:33:12 6-03-2023</small>
                                                    <h4>The generated Lorem Ipsum </h4>
                                                    <p>The generated Lorem Ipsum is therefore
                                                        always free from repetition, injected
                                                        humour, or non-characteristic words etc.
                                                    </p>
                                                    <a href="#"><i class="fa fa-trash-o "></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <small>5:20:11 4-04-2023</small>
                                                    <h4>Contrary to popular belief</h4>
                                                    <p>Hampden-Sydney College in Virginia,
                                                        looked up one.</p>
                                                    <a href="#"><i class="fa fa-trash-o "></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <small>2:10:12 10.11.2023</small>
                                                    <h4>There are many variations</h4>
                                                    <p>All the Lorem Ipsum generators on the
                                                        Internet .</p>
                                                    <a href="#"><i class="fa fa-trash-o "></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <small>10:15:26 6-04-2023</small>
                                                    <h4>Ipsum used standard chunk of Lorem</h4>
                                                    <p>Standard chunk is reproduced below for
                                                        those.</p>
                                                    <a href="#"><i class="fa fa-trash-o "></i></a>
                                                </div>
                                            </li>
                                        </ul>
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
