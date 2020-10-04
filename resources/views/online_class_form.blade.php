@extends('layouts.main')
@section('title', 'Online Class')
@section('content')
    <style>
        .formClass {
            width: 50%;
        }
    </style>
    <h1 class="pageTitle">Online Class</h1>
    <hr />
    <form class="formClass">
        @csrf
        <div class="form-group row">
            <label for="staticLevel" class="col-sm-2 col-form-label">Level:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLevel" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDate" class="col-sm-2 col-form-label">Date:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputDate">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRoom" class="col-sm-2 col-form-label">Room:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputRoom">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRoom" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Create class</button>
            </div>
        </div>
    </form>
    <p>
        Fill some info to create your class.
        <br />Then you can invite your students via email or provide a class code to them to join.
    </p>
@endSection
