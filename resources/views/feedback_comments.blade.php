@extends('layouts.main')
@section('title', 'Feedback/ questions')
@section('content')
    <h1 class="pageTitle">Feedback/ questions</h1>
    <hr />
    <p>Students/ parents can send feedback or questions to a classroom teacher regarding a particular reading.</p>
    <div class="form-group">
        <textarea rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Submit Feedback/ questions</button>
    </div>
    <div>
        <button type="button" class="btn btn-outline-primary">View Responses</button>
    </div>
@endsection
