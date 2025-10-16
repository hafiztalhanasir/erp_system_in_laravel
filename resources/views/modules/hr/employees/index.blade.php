@extends('layouts.master')
@section('title', $title)
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                @include('layouts.includes.hr_navbar')
                <div class="col-sm-8">
                    <div class="ibox">
                        <div class="ibox-content">
                                    <span class="text-muted float-right">
                                        <!-- Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 10.11.2023 -->
                                        <a href="{{route('employee.add')}}" class="btn btn-w-m btn-success">Add New Employees</a>
                                    </span>
                            <h2>Employees </h2>
                            <div class="input-group">
                                <input type="text" placeholder="Search Employees Filtter" class="input form-control">
                                <span class="input-group-append">
                                            <button type="button" class="btn btn btn-primary"> <i
                                                    class="fa fa-search"></i>
                                                Search</button>
                                        </span>
                            </div>
                            <div class="clients-list">
                                <div class="tab-content">
                                    <div id="tab-01" class="tab-pane active">
                                        <div class="full-height-scroll">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <tbody>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <img alt="image" src="img/a2.jpg">
                                                        </td>
                                                        <td><a href="#contact-1" class="client-link">Faisal
                                                                Hashmi</a>
                                                        </td>
                                                        <td> CEO</td>
                                                        <td class="contact-type">
                                                            <i class="fa fa-envelope">
                                                            </i>
                                                        </td>
                                                        <td> faisalsamroz@codeavour.com
                                                        </td>
                                                        <td class="client-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href="#"><img alt="image"
                                                                             src="img/a5.jpg"></a>
                                                        </td>
                                                        <td><a href="#contact-4" class="client-link">Edan
                                                                Randall</a>
                                                        </td>
                                                        <td>Integer Sem
                                                            Corp.</td>
                                                        <td class="contact-type">
                                                            <i class="fa fa-phone">
                                                            </i>
                                                        </td>
                                                        <td> +422 600
                                                            213</td>
                                                        <td class="client-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href="#"><img alt="image"
                                                                             src="img/a6.jpg"></a>
                                                        </td>
                                                        <td><a href="#contact-2" class="client-link">Jasper
                                                                Carson</a>
                                                        </td>
                                                        <td>Mone
                                                            Industries
                                                        </td>
                                                        <td class="contact-type">
                                                            <i class="fa fa-phone">
                                                            </i>
                                                        </td>
                                                        <td> +400 468
                                                            921</td>
                                                        <td class="client-status">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href="#"><img alt="image"
                                                                             src="img/a7.jpg"></a>
                                                        </td>
                                                        <td><a href="#contact-3" class="client-link">Reuben
                                                                Pacheco</a>
                                                        </td>
                                                        <td>Magna
                                                            Associates
                                                        </td>
                                                        <td class="contact-type">
                                                            <i class="fa fa-envelope">
                                                            </i>
                                                        </td>
                                                        <td> pacheco@manga.com
                                                        </td>
                                                        <td class="client-status">
                                                            <span class="label label-info">Phoned</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href="#"><img alt="image"
                                                                             src="img/a1.jpg"></a>
                                                        </td>
                                                        <td><a href="#contact-1" class="client-link">Simon
                                                                Carson</a>
                                                        </td>
                                                        <td>Erat Corp.
                                                        </td>
                                                        <td class="contact-type">
                                                            <i class="fa fa-envelope">
                                                            </i>
                                                        </td>
                                                        <td> Simon@erta.com
                                                        </td>
                                                        <td class="client-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href="#"><img alt="image"
                                                                             src="img/a3.jpg"></a>
                                                        </td>
                                                        <td><a href="#contact-2" class="client-link">Rooney
                                                                Lindsay</a>
                                                        </td>
                                                        <td>Proin
                                                            Limited</td>
                                                        <td class="contact-type">
                                                            <i class="fa fa-envelope">
                                                            </i>
                                                        </td>
                                                        <td> rooney@proin.com
                                                        </td>
                                                        <td class="client-status">
                                                            <span class="label label-danger">Deleted</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href="#"><img alt="image"
                                                                             src="img/a2.jpg"></a>
                                                        </td>
                                                        <td><a href="#contact-1"
                                                               class="client-link ">Anthony
                                                                Jackson</a>
                                                        </td>
                                                        <td> Tellus
                                                            Institute
                                                        </td>
                                                        <td class="contact-type">
                                                            <i class="fa fa-envelope">
                                                            </i>
                                                        </td>
                                                        <td> gravida@rbisit.com
                                                        </td>
                                                        <td class="client-status">
                                                            <span class="label label-danger">Deleted</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="client-avatar">
                                                            <a href="#"><img alt="image"
                                                                             src="img/a7.jpg"></a>
                                                        </td>
                                                        <td><a href="#contact-2" class="client-link">Reuben
                                                                Pacheco</a>
                                                        </td>
                                                        <td>Magna
                                                            Associates
                                                        </td>
                                                        <td class="contact-type">
                                                            <i class="fa fa-envelope">
                                                            </i>
                                                        </td>
                                                        <td> pacheco@manga.com
                                                        </td>
                                                        <td class="client-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
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
                <div class="col-sm-4">
                    <div class="ibox selected">
                        <div class="ibox-content">
                            <div class="tab-content">
                                <div id="contact-1" class="tab-pane active">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Faisal Hashmi</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="rounded-circle" src="img/a2.jpg"
                                                     style="width: 62px">
                                            </div>
                                            <a href="{{route('employee.edit')}}" class="btn btn-w-m btn-success">Edit Profile</a>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                Faisal Samroz Hashmi (Faisal
                                                Samroz Hashmi) Chief
                                                Executive Officer
                                                tempor incididunt ut labore
                                                et dolore magna
                                                aliqua.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                    class="fa fa-envelope"></i>
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" data-toggle="collapse"
                                                         data-target="#collapseOne" aria-expanded="true">
                                                                <span class="title">Work
                                                                    Information
                                                                </span>
                                                        <span class="accicon"><i
                                                                class="fas fa-angle-down rotate-icon"></i></span>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show"
                                                         data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Id</b>
                                                                    </td>
                                                                    <td>03
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Status</b>
                                                                    </td>
                                                                    <td>Active
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Department</b>
                                                                    </td>
                                                                    <td>Human
                                                                        Resources
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Designation
                                                                            or
                                                                            Title</b>
                                                                    </td>
                                                                    <td>Chief
                                                                        Executive
                                                                        Officer
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Email
                                                                        </b>
                                                                    </td>
                                                                    <td>Codeavour@gmail.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Primary
                                                                            Team</b>
                                                                    </td>
                                                                    <td>Codeavour
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <a href="#" class="btn btn-primary mt-3 float-right mr-3">View More Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                    </div>
                                </div>
                                <div id="contact-2" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Edan Randall</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="rounded-circle" src="img/a3.jpg"
                                                     style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                Many desktop publishing
                                                packages and web
                                                page editors now use Lorem
                                                Ipsum as their default
                                                tempor incididunt
                                                model text.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                    class="fa fa-envelope"></i>
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" data-toggle="collapse"
                                                         data-target="#collapseOne1" aria-expanded="true">
                                                                <span class="title">Work
                                                                    Information
                                                                </span>
                                                        <span class="accicon"><i
                                                                class="fas fa-angle-down rotate-icon"></i></span>
                                                    </div>
                                                    <div id="collapseOne1" class="collapse show"
                                                         data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Id</b>
                                                                    </td>
                                                                    <td>03
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Status</b>
                                                                    </td>
                                                                    <td>Active
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Date
                                                                            Of
                                                                            Joining</b>
                                                                    </td>
                                                                    <td>1998
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Type</b>
                                                                    </td>
                                                                    <td>Full
                                                                        Time
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Department</b>
                                                                    </td>
                                                                    <td>Human
                                                                        Resources
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Designation
                                                                            or
                                                                            Title</b>
                                                                    </td>
                                                                    <td>Chief
                                                                        Executive
                                                                        Officer
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Sub
                                                                            Department
                                                                        </b>
                                                                    </td>
                                                                    <td>---
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Primary
                                                                            Team</b>
                                                                    </td>
                                                                    <td>Codeavour
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" data-toggle="collapse"
                                                         data-target="#collapseTwo2" aria-expanded="false"
                                                         aria-controls="collapseTwo">
                                                                <span class="title">Additional
                                                                    Work Information
                                                                </span>
                                                        <span class="accicon"><i
                                                                class="fas fa-angle-down rotate-icon"></i></span>
                                                    </div>
                                                    <div id="collapseTwo2" class="collapse"
                                                         data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Id</b>
                                                                    </td>
                                                                    <td>03
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Status</b>
                                                                    </td>
                                                                    <td>Active
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Date
                                                                            Of
                                                                            Joining</b>
                                                                    </td>
                                                                    <td>1998
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Type</b>
                                                                    </td>
                                                                    <td>Full
                                                                        Time
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Department</b>
                                                                    </td>
                                                                    <td>Human
                                                                        Resources
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Designation
                                                                            or
                                                                            Title</b>
                                                                    </td>
                                                                    <td>Chief
                                                                        Executive
                                                                        Officer
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Sub
                                                                            Department
                                                                        </b>
                                                                    </td>
                                                                    <td>---
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Primary
                                                                            Team</b>
                                                                    </td>
                                                                    <td>Codeavour
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" data-toggle="collapse"
                                                         data-target="#collapseThree3" aria-expanded="false">
                                                                <span class="title">Work
                                                                    Contact
                                                                    Details</span>
                                                        <span class="accicon"><i
                                                                class="fas fa-angle-down rotate-icon"></i></span>
                                                    </div>
                                                    <div id="collapseThree3" class="collapse"
                                                         data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Id</b>
                                                                    </td>
                                                                    <td>03
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Status</b>
                                                                    </td>
                                                                    <td>Active
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Date
                                                                            Of
                                                                            Joining</b>
                                                                    </td>
                                                                    <td>1998
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Type</b>
                                                                    </td>
                                                                    <td>Full
                                                                        Time
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Department</b>
                                                                    </td>
                                                                    <td>Human
                                                                        Resources
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Designation
                                                                            or
                                                                            Title</b>
                                                                    </td>
                                                                    <td>Chief
                                                                        Executive
                                                                        Officer
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Sub
                                                                            Department
                                                                        </b>
                                                                    </td>
                                                                    <td>---
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Primary
                                                                            Team</b>
                                                                    </td>
                                                                    <td>Codeavour
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header collapsed" data-toggle=""
                                                         data-target="" aria-expanded="false">
                                                        <span class="title">Reporting Information</span>
                                                        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                                                    </div>
                                                    <div id="collapsefou" class=""
                                                         data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Id</b>
                                                                    </td>
                                                                    <td>03
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Status</b>
                                                                    </td>
                                                                    <td>Active
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Date
                                                                            Of
                                                                            Joining</b>
                                                                    </td>
                                                                    <td>1998
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Employee
                                                                            Type</b>
                                                                    </td>
                                                                    <td>Full
                                                                        Time
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Department</b>
                                                                    </td>
                                                                    <td>Human
                                                                        Resources
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Designation
                                                                            or
                                                                            Title</b>
                                                                    </td>
                                                                    <td>Chief
                                                                        Executive
                                                                        Officer
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Sub
                                                                            Department
                                                                        </b>
                                                                    </td>
                                                                    <td>---
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Primary
                                                                            Team</b>
                                                                    </td>
                                                                    <td>Codeavour
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                    </div>
                                </div>
                                <div id="contact-3" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Jasper Carson</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="rounded-circle" src="img/a4.jpg"
                                                     style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                Latin professor at
                                                Hampden-Sydney College in
                                                Virginia, looked
                                                embarrassing hidden in the
                                                middle.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                    class="fa fa-envelope"></i>
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                            <span class="float-right">
                                                                09:00 pm
                                                            </span>
                                                    Aldus PageMaker
                                                    including
                                                </li>
                                                <li class="list-group-item">
                                                            <span class="float-right">
                                                                10:16 am
                                                            </span>
                                                    Finibus Bonorum et
                                                    Malorum
                                                </li>
                                                <li class="list-group-item">
                                                            <span class="float-right">
                                                                08:22 pm
                                                            </span>
                                                    Write a letter to Sandra
                                                </li>
                                                <li class="list-group-item">
                                                            <span class="float-right">
                                                                11:06 pm
                                                            </span>
                                                    Standard chunk of Lorem
                                                </li>
                                                <li class="list-group-item">
                                                            <span class="float-right">
                                                                12:00 am
                                                            </span>
                                                    Open new shop
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                Lorem Ipsum passage, and
                                                going through the
                                                cites of the word in
                                                classical literature,
                                                discovered the
                                                undoubtable source.
                                            </p>
                                            <hr />
                                            <strong>Timeline
                                                activity</strong>
                                            <div id="vertical-timeline"
                                                 class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the
                                                            sales results
                                                            for the previous
                                                            year.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    2:10 pm -
                                                                    10.11.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop
                                                            publishing
                                                            packages
                                                            and web page
                                                            editors now
                                                            use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    4:20 pm -
                                                                    10.05.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many
                                                            variations of
                                                            passages of
                                                            Lorem Ipsum
                                                            available.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    06:10 pm -
                                                                    11.03.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated
                                                            Lorem Ipsum is
                                                            therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    02:50 pm -
                                                                    03.10.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the
                                                            sales results
                                                            for the previous
                                                            year.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    2:10 pm -
                                                                    10.11.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop
                                                            publishing
                                                            packages
                                                            and web page
                                                            editors now
                                                            use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    4:20 pm -
                                                                    10.05.2023
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="contact-4" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Reuben Pacheco</h2>

                                            <div class="m-b-sm">
                                                <img alt="image" class="rounded-circle" src="img/a5.jpg"
                                                     style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                Finibus Bonorum et Malorum"
                                                (The Extremes of
                                                Good and Evil) by
                                                Cicero,written in 45 BC.
                                                This book is a
                                                treatise on.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                    class="fa fa-envelope"></i>
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">
                                            Empaty
                                        </div>
                                    </div>
                                </div>
                                <div id="company-1" class="tab-pane">
                                    <div class="m-b-lg">
                                        <h2>Tellus Institute</h2>

                                        <p>
                                            Finibus Bonorum et Malorum" (The
                                            Extremes of
                                            Good and Evil) by
                                            Cicero,written in 45 BC. This
                                            book is a treatise
                                            on.
                                        </p>
                                        <div>
                                            <small>Active project completion
                                                with:
                                                48%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 48%;" class="progress-bar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">
                                            Empaty
                                        </div>
                                    </div>
                                </div>
                                <div id="company-2" class="tab-pane">
                                    <div class="m-b-lg">
                                        <h2>Penatibus Consulting</h2>

                                        <p>
                                            There are many variations of
                                            passages of Lorem
                                            Ipsum available, but the
                                            majority have suffered
                                            alteration in some.
                                        </p>
                                        <div>
                                            <small>Active project completion
                                                with:
                                                22%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 22%;" class="progress-bar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">
                                            Empaty
                                        </div>
                                    </div>
                                </div>
                                <div id="company-3" class="tab-pane">
                                    <div class="m-b-lg">
                                        <h2>Ultrices Incorporated</h2>

                                        <p>
                                            Many desktop publishing packages
                                            and web page
                                            editors now use Lorem
                                            Ipsum as their default model
                                            text.
                                        </p>
                                        <div>
                                            <small>Active project completion
                                                with:
                                                72%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 72%;" class="progress-bar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                            <span class="float-right">
                                                                <span class="label label-danger">BLOCKED</span>
                                                            </span>
                                                    Hidden in the middle of
                                                    text
                                                </li>
                                                <li class="list-group-item">
                                                            <span class="float-right"><span
                                                                    class="label label-primary">NEW</span>
                                                            </span>
                                                    Non-characteristic words
                                                    etc.
                                                </li>
                                                <li class="list-group-item">
                                                            <span class="float-right">
                                                                <span class="label label-danger">Deleted</span>
                                                            </span>
                                                    Bonorum et Malorum
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                There are many variations of
                                                passages of
                                                Lorem Ipsum available, but
                                                the majority have suffered
                                                alteration in
                                                some form, by injected
                                                humour.
                                            </p>
                                            <hr />
                                            <strong>Timeline
                                                activity</strong>
                                            <div id="vertical-timeline"
                                                 class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop
                                                            publishing
                                                            packages
                                                            and web page
                                                            editors now
                                                            use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    4:20 pm -
                                                                    10.05.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many
                                                            variations of
                                                            passages of
                                                            Lorem Ipsum
                                                            available.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    06:10 pm -
                                                                    11.03.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated
                                                            Lorem Ipsum is
                                                            therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    02:50 pm -
                                                                    03.10.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the
                                                            sales results
                                                            for the previous
                                                            year.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    2:10 pm -
                                                                    10.11.2023
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop
                                                            publishing
                                                            packages
                                                            and web page
                                                            editors now
                                                            use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted">
                                                                    4:20 pm -
                                                                    10.05.2023
                                                                </span>
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
