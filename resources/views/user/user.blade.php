@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">My profile</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="form-inline">Name:</label>
                <label class="form-inline">{{ $user->name }}</label>
            </div>
            <div class="form-group">
                <label class="form-inline">Email:</label>
                <label class="form-inline">{{ $user->email }}</label>
            </div>
            <div class="form-group">
                <label class="form-inline">Sex:</label>
                <label class="form-inline">{{ $user->sex }}</label>
            </div>
            <div class="form-group">
                <label class="form-inline">Profile pic:</label>
                <img />
            </div>
            <div class="form-group">
                <label class="form-inline">Contact_no:</label>
                <label class="form-inline">{{ $user->contact_no }}</label>
            </div>
            <div class="form-group">
                <label class="form-inline">Address:</label>
                <label class="form-inline">{{ $user->address }}</label>
            </div>
            <div class="form-group">
                {!! link_to('user/change-password', 'Change password') !!}
            </div>
        </div>
    </div>
</div>
@endsection