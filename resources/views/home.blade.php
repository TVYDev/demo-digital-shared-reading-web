@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <style>
        .homeContent {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 30px;
        }
        div:first-child {
            justify-self: center;
            align-self: center;
        }
        div:last-child {
            justify-self: center;
            align-self: center;
        }
        p {
            font-size: 0.95em;
        }
        img {
            width: 550px;
        }
    </style>
    <div class="homeContent">
        <div>
            <p><strong>Digital Shared Reading</strong> is an online platform which aims at promoting reading habits, strategies and fluency for students. This website is best suited for children (age 5-10) and young learners (age 10-15) at the Australian Centre for Education (ACE).</p>
            <p><strong>If you log in as a teacher,</strong> you can access a wide range of digital shared books together with instructions and guided questions. A variety of useful teaching resources related to shared reading are also provided to make reading classes more enjoyable and interactive. Teachers will no longer need to carry a big shared book to class anymore. They can just project the digital book in the class while exploiting shared reading techniques. No matter how big the class size is, all students will be able to see the texts and pictures more clearly. Teachers can also create their own virtual shared reading classes to help students improve their reading skills outside the classroom. Finally, there is a forum where teachers can share and learn from other educators’ teaching reading experience.</p>
            <p><strong>If you log in as a student/ parents,</strong> you can also access a range of shared books together with instructions and guided questions. Students can interact with their teachers and peers as well as complete reading tasks in their virtual classroom. There is also a place where students/ parents can communicate digitally with the classroom teachers regarding shared reading lessons.</p>
        </div>
        <div>
            <img src="https://www.flipbuilder.com/images/solution/textbook-assitant.jpg">
        </div>
    </div>

@endsection
