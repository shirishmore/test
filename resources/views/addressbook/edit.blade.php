@extends('layouts.master')

@section('title', 'Edit Addressbook')

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
        <form action="{{ route('addressBook.update', $addressbook->id) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type='hidden' class="form-control" name="id" value="{{ $addressbook->id }}">
        <!-- if there are login errors, show them here -->
        <p>
            {!! $errors->first('email') !!}
            {!! $errors->first('password') !!}
        </p>

        <div class="form-group">
            <label>Addressbook Title  :  </label>
            <input type='text' class="" name="address_title" value="{{ $addressbook->address_title }}">
        </div>

        <div class="form-group">
            <label>Contact Person Name:  </label>
            <input type='text' class="" name="contact_name" value="{{ $addressbook->contact_name }}">
        </div>

        <div class="form-group">
            <label>Contact Person Number :  </label>
            <input type='text' class="" name="contact_phone" value="{{ $addressbook->contact_phone }}">
        </div>

        <div class="form-group">
            <label>Address Line1 :  </label>
            <input type='text' class="" name="address1" value="{{ $addressbook->address1 }}">

        </div>

        <div class="form-group">
            <label>Address Line1 :  </label>
            <input type='text' class="" name="address2" value="{{ $addressbook->address2 }}">
        </div>

        <div class="form-group">
            <label>Address Line1 :  </label>
            <input type='text' class="" name="address3" value="{{ $addressbook->address3 }}">
        </div>

        <div class="form-group">
            <label>Pincode :  </label>
            <input type='text' class="" name="pincode" value="{{ $addressbook->pincode }}">
        </div>

        <div class="form-group">
            <label>City :  </label>
            <input type='text' class="" name="city" value="{{ $addressbook->city }}">
        </div>

        <div class="form-group">
            <label>State :  </label>
            <input type='text' class="" name="state" value="{{ $addressbook->state }}">
        </div>


        <div class="form-group">
            <label>Country :  </label>
            <input type='text' class="" name="country" value="{{ $addressbook->country }}">
        </div>

        <div class="form-group">
                <input type="submit" value="Update" class = "btn btn-primary">
            </div>
        </form>
    </div>

</div>

@stop