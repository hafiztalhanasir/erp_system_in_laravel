@extends('layouts.master')
@section('title', $title)
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.includes.hr_navbar')
                </div>
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Vacations / Holiday calendar </h5>
                            <div class="ibox-tools">
                                <a href="{{route('calendar.add')}}" class="btn btn-w-m btn-success">Add Holiday calendar</a>
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
