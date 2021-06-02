@extends('layouts.app')
@section('title', 'Customer')
@section('content')
    <h1>Edit</h1>
    <x-forms.edit :customer="$customer" />
@endsection
