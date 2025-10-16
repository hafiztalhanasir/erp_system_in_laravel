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
                                @can('role-create')
                                    <button class="btn btn-w-m btn-success" id="btnRoleModal">Add New Role</button>
                                @endcan
                            </span>
                            <h2>Roles</h2>
                            <div class="input-group">
                                <input type="text" id="searchInput" placeholder="Search Role Filter" class="input form-control" />
                            </div>
                            <div class="clients-list">
                                <div class="tab-content">
                                    <div id="tab-01" class="tab-pane active">
                                        <div class="full-height-scroll">
                                            <div class="table-responsive" id="roleTable">
                                                <table class="table table-striped table-hover">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Role Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="tbody">
                                                    <tr><td colspan="3" class="text-center">Loading...</td></tr>
                                                    </tbody>
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Role Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
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

    <!-- Add/Edit Role Modal -->
    <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="roleModalHeading">Add Role</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="roleForm">
                        <input type="hidden" name="id" id="id" value="0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="font-normal">Role Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" placeholder="Role Name" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="reset" class="btn btn-secondary" id="btnReset">Reset</button>
                                <button type="button" class="btn btn-primary" id="btnSubmit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_scripts')
    @include('roles.script');
@endsection
