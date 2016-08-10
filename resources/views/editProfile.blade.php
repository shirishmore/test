@extends('layouts.master')

@section('title', 'Edit Profile')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <form action="{{ url('updateProfile') }}" method="POST">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type='hidden' class="form-control" name="id" value="{{ $user->id }}">
            <!-- if there are login errors, show them here -->
            <p>
                {!! $errors->first('email') !!}
                {!! $errors->first('password') !!}
            </p>

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your display Name" class="form-control" value="{{$user->name}}" />
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="{{$user->email}}"/>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" value=""/>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder=" Confirm Password" class="form-control" value=""/>
            </div>


            <div class="form-group">{!! Form::submit('Submit!') !!}</div>
        </form>
    </div>

</div>
</div>
@stop