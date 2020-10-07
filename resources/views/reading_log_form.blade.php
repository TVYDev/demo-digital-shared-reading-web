@extends('layouts.main')
@if(\Illuminate\Support\Facades\Session::get('type-login') === 'teacher')
    @section('title', 'Reading Log')
@else
    @section('title', 'My reading log')
@endif
@section('content')
    <style>
        .form-group.row {
            width: 40%;
        }
    </style>

    @if(\Illuminate\Support\Facades\Session::get('type-login') === 'teacher')
        <h1 class="pageTitle">Reading Log</h1>
    @else
        <h1 class="pageTitle">My reading log</h1>
    @endif
    <hr />
    <p>Students can access and complete their diary or reflection here.</p>
    <div class="form-group row">
        <label for="staticLevel" class="col-sm-2 col-form-label">Title:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputLevel" >
        </div>
    </div>
    <div class="form-group row">
        <label for="staticLevel" class="col-sm-2 col-form-label">Author:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputLevel" >
        </div>
    </div>
    <div class="form-group row">
        <label for="staticLevel" class="col-sm-2 col-form-label">Genre:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputLevel" >
        </div>
    </div>
    <div class="form-group row">
        <label for="staticLevel" class="col-sm-2 col-form-label">Date:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputLevel" >
        </div>
    </div>
    <div class="form-group">
        <textarea rows="10" class="form-control" placeholder="Write your reflection of the book you have read here:"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Submit</button>
    </div>
@endsection
