@extends('layouts.main')
@section('title', 'Log In')
@section('content')
    <style>
        .form-teacher, .form-student {
            margin: 20px auto;
            text-align: center;
            width: 30%;
        }
        .btnLogIn {
            padding: 7px 30px;
        }
    </style>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-teacher-tab" data-toggle="tab" href="#nav-teacher" role="tab">As a teacher</a>
            <a class="nav-item nav-link" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab">As a student / parents</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-teacher" role="tabpanel">
            <form class="form-teacher">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary btnLogIn" data-url="{{ route('menu', ['type' => 'teacher']) }}">Log In</button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="nav-student" role="tabpanel">
            <form class="form-student">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary btnLogIn" data-url="{{ route('menu', ['type' => 'student']) }}">Log In</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('page-script')
    <script>
        $(document).ready(function() {
           $('.btnLogIn').click(function() {
               window.location.href = $(this).data('url');
           })
        });
    </script>
@endsection
