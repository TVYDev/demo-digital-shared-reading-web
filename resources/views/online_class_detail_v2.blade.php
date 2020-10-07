@extends('layouts.main')
@if(\Illuminate\Support\Facades\Session::get('type-login') === 'teacher')
    @section('title', 'Virtual reading classrooms')
@else
    @section('title', 'My virtual reading classrooms')
@endif
@section('content')
    <style>
        .className {
            font-size: 1.2em;
            margin-right: 20px;
            font-weight: bold;
        }
        .thumbnail {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 1px solid lightgray;
            border-radius: 10px;
            color: white;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url({{asset('images/stickers.jpg')}});
            padding: 20px;
        }
        .thumbnail div {
            text-align: right;
        }
        .thumbnail button {
            background: none;
            border: none;
            text-align: right;
            color: white;
        }
        .detailContent {
            display: grid;
            grid-template-columns: 1fr 4fr;
        }
        .upcoming {
            border: 1px solid lightgray;
            border-radius: 10px;
            padding: 10px;
        }
        .upcoming div {
            text-align: right;
        }
        .upcoming button {
            background: none;
            border: none;
            text-align: right;
        }
        .share {
            border: 1px solid lightgray;
            border-radius: 10px;
            padding: 10px 5px;
            display: grid;
            grid-template-columns: 50px auto 50px;
            justify-items: center;
            align-items: center;
            margin-left: 20px;
        }
        .share div:nth-child(2) {
            justify-self: start;
            width: 100%;
        }
        .share input {
            width: 100%;
            border: none;
        }
        .share input:focus {
            outline: none;
        }
        .share i {
            color: #0391CF;
            cursor: pointer;
        }
    </style>
    @if(\Illuminate\Support\Facades\Session::get('type-login') === 'teacher')
        <h1 class="pageTitle">Virtual reading classrooms</h1>
    @else
        <h1 class="pageTitle">My virtual reading classrooms</h1>
    @endif
    <span class="className">Class 1</span><span><strong>(16:00-17:30)</strong></span>
    <div>
        <br />
    </div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-stream" role="tab">Stream</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#nav-required-reading" role="tab">Required reading</a>
            <a class="nav-item nav-link" data-toggle="tab" href="#nav-tasks" role="tab">Tasks</a>
        </div>
    </nav>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="nav-stream" role="tabpanel">
            <div class="thumbnail">
                <h2>Class 1 (16:00-17:30)</h2>
                <h4>T2 2020</h4>
                <span>Class code grxrefg&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-qrcode"></i></span>
                <div>
                    <button type="button">Select theme</button>
                </div>
                <div>
                    <button type="button">Upload photo</button>
                </div>
            </div>
            <div class="detailContent">
                <div class="leftSide">
                    <div class="upcoming">
                        <h5><strong>Upcoming</strong></h5>
                        <span style="color: lightgray">No work due in soon</span>
                        <div>
                            <br />
                            <button type="button">View all</button>
                        </div>
                    </div>
                </div>
                <div class="rightSide">
                    <div class="share">
                        <div>
                            <img src="https://cdn.icon-icons.com/icons2/1736/PNG/512/4043260-avatar-male-man-portrait_113269.png" width="30px" alt="">
                        </div>
                        <div>
                            <input type="text" placeholder="Share something with your class...">
                        </div>
                        <div>
                            <i class="fas fa-retweet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-required-reading" role="tabpanel">
        </div>
        <div class="tab-pane fade" id="nav-tasks" role="tabpanel">
        </div>
    </div>
@endsection
