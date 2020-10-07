@extends('layouts.main')
@section('title', 'Menu')
@section('content')
    <style>
        .menu div:first-child, .menu div:last-child, .menuStudent {
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
        .menuStudent {
            grid-template-columns: repeat(4, 1fr);
        }
        .menu button, .menuStudent button {
            color: #0391CF;
            font-size: 1.1em;
            background: none;
            border: 2px solid #0391CF;
            border-radius: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .menu button:hover, .menu button:focus, .menuStudent button:focus, .menuStudent button:hover {
            background-color: #0391CF;
            color: white;
        }
        .video {
            margin-top: 20px;
            text-align: center;
        }
    </style>
    @if($type === 'teacher')
        <div class="menu">
            <div>
                <button class="books" data-url="{{ route('books') }}">Online resources</button>
                <button class="onlineClass" data-url="{{ route('online_class_form') }}">Virtual reading classrooms</button>
                <button class="teacherForum" data-url="{{ route('teacher_forum') }}">Teacher Forum</button>
            </div>
            <div>
                <button class="readingLog" data-url="{{ route('reading_log') }}">Students' reading logs</button>
                <button class="comments" data-url="{{ route('students_parents_comments') }}">Students | Parents' Feedback/ questions</button>
            </div>
        </div>
    @elseif($type === 'student')
        <div class="menuStudent">
            <button class="books" data-url="{{ route('books') }}">Books</button>
            <button class="onlineClass" data-url="{{ route('online_class_detail') }}">My virtual reading classrooms</button>
            <button class="readingLog" data-url="{{ route('reading_log_form') }}">My reading log</button>
            <button class="comments" data-url="{{ route('feedback_comments') }}">Feedback/ questions</button>
        </div>
    @else
    @endif

    <div class="video">
        @if($type === 'teacher')
            <iframe width="560" height="315" src="https://www.youtube.com/embed/E2zVJp_HeeM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>It is an example of how shared reading can be conducted in the classroom.</p>
        @elseif($type === 'student')
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ItWVGjCqBNQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Watch the video to see how parents can do shared reading with their children!</p>
        @else
        @endif

    </div>
@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu button, .menuStudent button').click(function() {
                window.location.href = $(this).data('url');
            })
        });
    </script>
@endsection
