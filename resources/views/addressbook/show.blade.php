@extends('layouts.master')

@section('title', 'View Addressbook ')

@section('content')
<div class="container">
    <div class="content">
        <h4>Showing {{ $addressbook->contact_name }}</h4>
        <div class="jumbotron ">
            <p>
                <strong>Contact Name:</strong> {{ $addressbook->contact_name }}<br>
                <strong>Contact Phone:</strong> {{ $addressbook->contact_phone }}<br>
                <strong>Address1:</strong> {{ $addressbook->address1 }}<br>
                <strong>Address2:</strong> {{ $addressbook->address2 }}<br>
                <strong>Address3:</strong> {{ $addressbook->address3 }}<br>
                <strong>Pincode:</strong> {{ $addressbook->pincode }}<br>
                <strong>City:</strong> {{ $addressbook->city }}<br>
                <strong>State:</strong> {{ $addressbook->state }}<br>
                <strong>Country:</strong> {{ $addressbook->Ccountry }}<br>
            </p>
        </div>
    </div>
</div>
@stop