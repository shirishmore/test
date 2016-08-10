@extends('layouts.master')

@section('title', 'Addressbook ')

@section('content')

<!--<div class="row">
    <div class="col-sm-12">
        <h1>Addressbook</h1>
    </div>
</div>-->

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
</div>


<div class="row">
    <div class="col-sm-12">
        <a href="{{ url('addressBook/create') }}" class="btn btn-primary">Create New Contact</a>
        <br>
        <br>
    </div>
</div>


<div class="row" >
    <div class="col-sm-12">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Address Title</td>
                <td>Contact Name</td>
                <td>Contact Phone</td>
                <td>Address1</td>
                <td>Address2</td>
                <td>Address3</td>
                <td>Pincode</td>
                <td>City</td>
                <td>State</td>
                <td>Country</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($addressbook as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->address_line}}</td>
                <td>{{ $value->contact_name  }}</td>
                <td>{{ $value->contact_phone  }}</td>
                <td>{{ $value->address1 }}</td>
                <td>{{ $value->address2 }}</td>
                <td>{{ $value->address3 }}</td>
                <td>{{ $value->pincode }}</td>
                <td>{{ $value->city }}</td>
                <td>{{ $value->state }}</td>
                <td>{{ $value->country }}</td>
                <td></td>
                <td >
                    <a class="btn" href="{!! URL::to('addressBook/' . $value['id']) !!}"><i class="fa fa-eye"></i> </a>
                    <a class="btn" href="{!! URL::to('addressBook/' . $value['id'] . '/edit') !!}"><i class="fa fa-pencil"></i></a>
                    {{ Form::open(array('url' => 'addressBook/' . $value['id'], 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    <!--<a class="btn delete-client" data-id="{!! $value['id'] !!}" href="javascript:void();"><i class="fa fa-times"></i></a>-->
                    {{ Form::close() }}

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
