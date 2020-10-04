@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <style>
        .homeContent {
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-column-gap: 30px;
        }
        div:first-child {
            justify-self: center;
            align-self: center;
        }
        img {
            width: 500px;
        }
    </style>
    <div class="homeContent">
        <div>
            <strong>Digital Shared Reading</strong> brings that concept to the online platform which we believe will promote reading habits, strategies and fluency for students. As books are available at their fingertips, we hope that it will eliminate the barriers of going to the book club  or the library and complete some borrowing information, which discourages students from borrowing and reading books. Teachers can also make the best use of this website to make their reading classes more interactive and fun. Through this site, parents can also be a part of their children learning process.
            <br /><br />
            This website is best suited for children and young learners at the Australian Centre for Education (ACE).
        </div>
        <div>
            <img src="https://st2.depositphotos.com/1967477/6351/v/450/depositphotos_63519645-stock-illustration-cartoon-kids-reading-book.jpg">
        </div>
    </div>
@endsection
