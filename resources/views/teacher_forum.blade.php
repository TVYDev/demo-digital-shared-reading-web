@extends('layouts.main')
@section('title', 'Teacher Forum')
@section('content')
    <h1 class="pageTitle">Teacher Forum</h1>
    <hr />
    <div class="form-group">
        <textarea name="comment" rows="10" class="form-control" placeholder="Post your comments or questions here..."></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Submit</button>
    </div>
    <hr />
    <div class="form-group">
        <input type="text" placeholder="Search discussions in this forum..." class="form-control">
    </div>
    <ul>
        <li>This is where teachers can post to ask or share anything related to teaching, which the other teachers will reply in comments.</li>
        <li>They can also search the forum by typing a keyword they want to find out in the previous posts of the forum.</li>
    </ul>
@endSection
