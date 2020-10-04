@extends('layouts.main')
@section('title', 'Reading Log')
@section('content')
    <style>
        .studentReflections {
            padding-left: 30px;
        }
        .studentReflections button {
            padding: 2px 30px;
            display: block;
            margin-bottom: 10px;
            background-color: #0391CF;
            color: white;
            border-radius: 10px;
            border: 2px solid #0391CF;
        }
        .studentReflections button:hover {
            background-color: white;
            color: #0391CF;
        }
    </style>
    <h1 class="pageTitle">Reading Log</h1>
    <hr />
    <h3>Check students' reflection</h3>
    <div class="studentReflections">
        <button>Student A (Click here to read)…</button>
        <button>Student B (Click here to read)…</button>
        <button>Student C (Click here to read)…</button>
    </div>
    <ul>
        <li>After students finish reading a book, they will write a diary or reflection of the book.</li>
        <li>It is where teachers can check their students’ reading diary or reflection to track their progress.</li>
        <li>Click the name of a student to see the reflections of the books they have read.</li>
    </ul>
@endsection
