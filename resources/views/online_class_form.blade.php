@extends('layouts.main')
@section('title', 'Online Class')
@section('content')
    <style>
        .formClass {
            width: 50%;
        }
        .itemClass {
            border: 1px solid lightgray;
            border-radius: 10px;
        }
        .listClasses {
            display: grid;
            grid-template-columns: repeat(4,1fr);
            align-items: center;
            grid-column-gap: 10px;
        }
        .listClasses .topContent {
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            display: grid;
            grid-template-columns: auto 30px;
            background-position: center;
            background-repeat: no-repeat;
        }
        .listClasses .topContent.class1 {
            background-image: url({{asset('images/class_2.jpg')}});
        }
        .listClasses .topContent.class2 {
            background-image: url({{asset('images/class_1.jpg')}});
        }
        .listClasses .topContent.class3 {
            background-image: url({{asset('images/class_3.jpg')}});
        }
        .listClasses .topContent.class4 {
            background-image: url({{asset('images/class_4.jpg')}});
        }
        .listClasses .middleContent {
            height: 100px;
        }
        .listClasses .bottomContent {
            padding: 15px;
            color: darkgray;
            text-align: right;
            border-top: 1px solid lightgray;
        }
        .listClasses .bottomContent i {
            margin-left: 20px;
        }
        .listClasses .itemClass {
            cursor: pointer;
        }
        .listClasses .itemClass:hover {
            opacity: 0.5;
        }
    </style>
    <h1 class="pageTitle">Virtual reading classrooms</h1>
    <p>
        Fill some info to create your class.
        <br />Then you can invite your students via email or provide a class code to them to join.
    </p>
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
                <button type="button" class="btn btn-primary btnCreateClass">Create class</button>
            </div>
        </div>
    </form>
    <div class="listClasses">
        <div class="itemClass" data-url="{{ route('online_class_detail') }}">
            <div class="topContent class1">
                <div><h4>Class 1</h4></div>
                <div><i class="fas fa-ellipsis-v"></i></div>
                <div>T2 2020</div>
            </div>
            <div class="middleContent"></div>
            <div class="bottomContent">
                <i class="fas fa-location-arrow"></i>
                <i class="fas fa-folder"></i>
            </div>
        </div>
        <div class="itemClass">
            <div class="topContent class2">
                <div><h4>Class 2</h4></div>
                <div><i class="fas fa-ellipsis-v"></i></div>
                <div>T2 2020</div>
            </div>
            <div class="middleContent"></div>
            <div class="bottomContent">
                <i class="fas fa-location-arrow"></i>
                <i class="fas fa-folder"></i>
            </div>
        </div>
        <div class="itemClass">
            <div class="topContent class3">
                <div><h4>Class 3</h4></div>
                <div><i class="fas fa-ellipsis-v"></i></div>
                <div>T2 2020</div>
            </div>
            <div class="middleContent"></div>
            <div class="bottomContent">
                <i class="fas fa-location-arrow"></i>
                <i class="fas fa-folder"></i>
            </div>
        </div>
        <div class="itemClass">
            <div class="topContent class4">
                <div><h4>Class 4</h4></div>
                <div><i class="fas fa-ellipsis-v"></i></div>
                <div>T2 2020</div>
            </div>
            <div class="middleContent"></div>
            <div class="bottomContent">
                <i class="fas fa-location-arrow"></i>
                <i class="fas fa-folder"></i>
            </div>
        </div>
    </div>
@endSection
@section('page-script')
    <script>
        $(document).ready(function() {
            $('.itemClass').click(function() {
                const url = $(this).data('url')
                if(url) {
                    window.location.href = url;
                }
            });
        })
    </script>
@endsection
