@extends('layouts.main')
@section('title', 'Students | Parents’ Feedback/ questions')
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
    <h1 class="pageTitle">Students | Parents’ Feedback/ questions</h1>
    <hr />
    <p>This is where teachers can communicate with students/ students’ parents through a chat format.</p>
    <div class="studentReflections">
        <button>Student A (Click here to read)…</button>
        <button>Student B (Click here to read)…</button>
        <button>Student C (Click here to read)…</button>
    </div>
@endsection
