@extends('layouts.master')
@section('title', $title)
@section('content')
    <div class="wrapper wrapper-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Un Authorize User</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_scripts')
    @include('roles.script');
@endsection
