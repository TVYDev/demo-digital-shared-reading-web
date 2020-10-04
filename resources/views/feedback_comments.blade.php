@extends('layouts.main')
@section('title', 'Feedback & Comments')
@section('content')
    <h1 class="pageTitle">Feedback and Comments</h1>
    <hr />
    <p>Students/ parents can send feedback or questions to a classroom teacher regarding a particular reading.</p>
    <div class="form-group">
        <textarea rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Submit Feedback</button>
    </div>
@endsection
