@extends('layouts.main')
@section('title', 'Reading Log')
@section('content')
    <h1 class="pageTitle">Reading Log</h1>
    <hr />
    <p>Students can access and complete their diary or reflection here.</p>
    <div class="form-group">
        <textarea rows="10" class="form-control" placeholder="Write your reflection of the book you have read here:"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Submit</button>
    </div>
@endsection
