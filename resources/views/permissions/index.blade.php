@extends('layouts.master')
@section('title', $title)
@section('page_styles')
 <link rel="stylesheet" href="{{asset('css/plugins/select2/select2.min.css')}}">
@endsection
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h2>Role Permissions</h2>
                            <div class="input-group">
                                <select name="role_id" id="roleId" class="form-control select2">
                                    <option value="">Select Role</option>
                                    @if($roles)
                                        @foreach($roles as $role)
                                            <option value="{{$role['id']}}">{{$role['name']}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="clients-list">
                                <div class="tab-content">
                                    <div id="tab-01" class="tab-pane active">
                                        <div class="full-height-scroll">
                                            <div class="table-responsive">
                                                <form id="assignPermissionForm">
                                                    <table class="table table-striped table-hover">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Module Name</th>
                                                            <th>All</th>
                                                            <th>list</th>
                                                            <th>Create</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                            <th>Detail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbody" id="permissionTbody"></tbody>
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Module Name</th>
                                                            <th>All</th>
                                                            <th>list</th>
                                                            <th>Create</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                            <th>Detail</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                </form>
                                            </div>
                                            @can('permission-create')
                                                <div class="col-md-12 text-right" id="actionButtons"></div>
                                            @endcan
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
    @include('permissions.script');
@endsection
