@extends('layouts.master')
@section('title', $title)
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <span class="text-muted float-right">
                                <button class="btn btn-w-m btn-success" id="btnModuleModal">Add New User</button>
                            </span>
                            <h2>Permission Modules</h2>
                            <div class="input-group">
                                <input type="text" placeholder="Search Module Filter" class="input form-control">
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
@section('footer_scripts')
    @include('users.script');
@endsection
