@extends('layouts.main')
@section('title', 'Online Class Detail')
@section('content')
    <style>
        .classDetail {
            display: grid;
            grid-template-columns: 1fr 2fr;
        }
        .classDetail .leftSide button {
            display: block;
            color: white;
            background-color: #0391CF;;
            border: 2px solid #0391CF;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .classDetail .leftSide button:hover {
            background-color: white;
            color: #0391CF;
        }
        .classDetail .rightSide div {
            border: 2px solid #0391CF;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }
        .classDetail .rightSide div:first-child {
            padding: 40px 10px;
        }

        .classDetail .rightSide div:last-child {
            padding: 70px 10px;
        }
    </style>
    <h1 class="pageTitle">Online Class</h1>
    <hr />
    <p>After creating a class, you can see your class as below:</p>
    <div class="classDetail">
        <div class="leftSide">
            <button>Stream</button>
            <button>Set required reading</button>
            <button>Set Tasks for learners to complete as homework</button>
        </div>
        <div class="rightSide">
            <div>Young Learners Level 3</div>
            <div>Stream: Posts in the class will appear here.</div>
        </div>
    </div>
@endsection
