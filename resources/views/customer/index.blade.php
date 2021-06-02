@extends('layouts.app')
@section('title', 'Customer')
@section('content')
    <h1>customer</h1>
    <h2>{{$admin}}</h2>
    <div class="d-flex flex-row-reverse">
        <a class="btn btn-primary my-2" href="{{route("customers.create")}}">Add</a>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <x-customers :customers="$customers" />
@endsection


