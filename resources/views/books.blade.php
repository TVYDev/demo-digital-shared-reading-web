@extends('layouts.main')
@section('title', 'Books')
@section('content')
    <style>
        .optionButton {
            background: none;
            border-radius: 10px;
            border: 2px solid #0391CF;
            padding: 2px 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .optionButton.active {
            background-color: #0391CF;
            color: white;
        }
    </style>
    <h1 class="pageTitle">Books</h1>
    <hr />
    <div>
        <input type="text" placeholder="Search Books ..." class="form-control">
    </div>
    <button class="optionButton active">Fictions</button>
    <button class="optionButton">Non-fictions</button>
    <p>
        There are a range of books categorized based on their genres (e.g. fiction or non-fiction). Once you choose the book genre, it will show a list of books in different levels from elementary to advanced. You can also search using the title and/or author of the book you would like to read. The list of books can also be customized and arranged based on the alphabetical order of the book titles or authors.
    </p>

    <button class="optionButton active">Elementary</button>
    <button class="optionButton">Pre-intermediate</button>
    <button class="optionButton">Intermediate</button>
    <button class="optionButton">Upper-intermediate</button>
    <button class="optionButton">Advanced</button>

    <ul class="list-group">
        <li class="list-group-item"><a href="#">The Bubbles</a></li>
        <li class="list-group-item"><a href="#">The Dragons!</a></li>
    </ul>
@endSection
