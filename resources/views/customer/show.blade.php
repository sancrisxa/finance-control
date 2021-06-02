@extends('layouts.app')
@section('title', 'Customer')
@section('content')
    <h1>Show</h1>
    <x-customer :customer="$customer" />
@endsection
