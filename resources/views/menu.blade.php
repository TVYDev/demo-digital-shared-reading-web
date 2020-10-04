@extends('layouts.main')
@section('title', 'Menu')
@section('content')
    <style>
        .menu div:first-child, .menu div:last-child {
            margin: 5px;
            display: grid;
            grid-column-gap: 5px;
            grid-row-gap: 5px;
        }
        .menu div:first-child {
            grid-template-columns: 1fr 1fr 1fr;
        }
        .menu div:last-child {
            grid-template-columns: 1fr 1fr;
        }
        .menu button {
            color: #0391CF;
            font-size: 1.1em;
            background: none;
            border: 2px solid #0391CF;
            border-radius: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .menu button:hover, .menu button:focus {
            background-color: #0391CF;
            color: white;
        }
        .video {
            margin-top: 20px;
            text-align: center;
        }
    </style>
    <div class="menu">
        <div>
            <button class="books" data-url="{{ route('books') }}">Books</button>
            <button class="onlineClass" data-url="{{ route('online_class_form') }}">Online Class</button>
            <button class="teacherForum" data-url="{{ route('teacher_forum') }}">Teacher Forum</button>
        </div>
        <div>
            <button class="readingLog" data-url="{{ route('reading_log') }}">Reading Log</button>
            <button class="comments" data-url="{{ route('students_parents_comments') }}">Students | Parents' Comments</button>
        </div>
    </div>
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/E2zVJp_HeeM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu button').click(function() {
                window.location.href = $(this).data('url');
            })
        });
    </script>
@endsection
