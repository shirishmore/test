@extends('layouts.master')

@section('title', 'Create Addressbook')

@section('content')

<div class="row">
    <div class="col-sm-12">
        @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
        </div>
        @endif
    </div>
<div class="row">
    <div class="col-sm-12">
        {!! Form::open(array('url' => 'addressBook')) !!}

        {{ csrf_field() }}
        <!-- if there are login errors, show them here -->
        <p>
            {!! $errors->first('email') !!}
            {!! $errors->first('password') !!}
        </p>
        <div class="form-group">
            <label>Addressbook Title  :  </label>
            <input type='text' class="" name="address_title" value="">
        </div>

        <div class="form-group">
            <label>Contact Person Name:  </label>
            <input type='text' class="" name="contact_name" value="">
        </div>

        <div class="form-group">
            <label>Contact Person Number :  </label>
            <input type='text' class="" name="contact_phone" value="">
        </div>

        <div class="form-group">
            <label>Address Line1 :  </label>
            <input type='text' class="" name="address1" value="">

        </div>

        <div class="form-group">
            <label>Address Line1 :  </label>
            <input type='text' class="" name="address2" value="">
        </div>

        <div class="form-group">
            <label>Address Line1 :  </label>
            <input type='text' class="" name="address3" value="">
        </div>

        <div class="form-group">
            <label>Pincode :  </label>
            <input type='text' class="" name="pincode" value="">
        </div>

        <div class="form-group">
            <label>City :  </label>
            <input type='text' class="" name="city" value="">
        </div>

        <div class="form-group">
            <label>State :  </label>
            <input type='text' class="" name="state" value="">
        </div>


        <div class="form-group">
            <label>Country :  </label>
            <input type='text' class="" name="country" value="">
        </div>

        <div class="form-group">
            <input type="submit" value="Save" class = "btn btn-primary">

        </div>
        {!! Form::close() !!}
    </div>

</div>

@stop