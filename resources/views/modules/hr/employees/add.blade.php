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
                            <h5>Add Employees </h5>
                            <div class="ibox-tools">
                                <span
                                    class="text-muted small float-right">Last
                                    modification: <i
                                        class="fa fa-clock-o"></i>
                                    2:10 pm
                                    - 10.11.2023</span>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">First
                                                Name</label>
                                            <input type="text"
                                                   placeholder="First Name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Last
                                                Name</label>
                                            <input type="text"
                                                   placeholder="last Name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Street
                                                Address</label>
                                            <input type="text"
                                                   placeholder="Street"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Street
                                                Address Line 2</label>
                                            <input type="text"
                                                   placeholder="Street Address"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">City</label>
                                            <input type="text"
                                                   placeholder="City"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">State
                                                / Province</label>
                                            <input type="text"
                                                   placeholder="State / Province"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Postal
                                                / Zip Code</label>
                                            <input type="text"
                                                   placeholder="Zip Code"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Phone
                                                Number</label>
                                            <input type="tel"
                                                   placeholder="(000) 000 0000"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Home
                                                Phone Number</label>
                                            <input type="tel"
                                                   placeholder="(000) 000 0000e"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Email</label>
                                            <input type="email"
                                                   placeholder="FirstName@gmail.com"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Birthday</label>
                                            <input type="date"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"
                                             id="data_1">
                                            <label
                                                class="font-normal">Department</label>
                                            <select
                                                class="select2_demo_1 form-control">
                                                <option
                                                    value="1">Backend
                                                    Developer</option>
                                                <option
                                                    value="2">frontend
                                                    web
                                                    developer</option>
                                                <option
                                                    value="3">Digital
                                                    Marketing
                                                </option>
                                                <option
                                                    value="4">SEO</option>
                                                <option
                                                    value="5">Quality
                                                    Assurance
                                                    (QA)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label
                                            class="font-normal">CV</label>
                                        <div class="custom-file">
                                            <input id="logo" type="file" class="custom-file-input">
                                            <label for="logo" class="custom-file-label">Choose file...</label>
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
