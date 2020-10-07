@extends('layouts.main')
@section('title', 'Books')
@section('content')
    <style>
        .optionButton {
            background: none;
            border-radius: 10px;
            border: 2px solid #0391CF;
            padding: 2px 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .optionButton.active {
            background-color: #0391CF;
            color: white;
        }
        .listBook {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-column-gap: 30px;
        }
        .listBook div {
            border-radius: 10px;
            padding: 5px;
            border: 1px solid lightgray;
            align-self: center;
            text-align: center;
            cursor: pointer;
        }
        .listBook .bookThumbnail {
            height: 200px;
        }
        .listBook div:hover {
            opacity: 0.5;
        }
    </style>
    <h1 class="pageTitle">Online resources</h1>
    <p>
        There are a range of books categorized based on their genres (e.g. fiction or non-fiction). Once you choose the book genre, it will show a list of books in different levels from elementary to advanced. You can also search using the title and/or author of the book you would like to read. The list of books can also be customized and arranged based on the alphabetical order of the book titles or authors.
    </p>
    <hr />
    <div>
        <input type="text" placeholder="Search Books ..." class="form-control">
    </div>
    <div>
        <button class="optionButton active">Fiction</button>
        <button class="optionButton">Non-fiction</button>
    </div>

    <div>
        <button class="optionButton active">Elementary</button>
        <button class="optionButton">Pre-intermediate</button>
        <button class="optionButton">Intermediate</button>
        <button class="optionButton">Upper-intermediate</button>
        <button class="optionButton">Advanced</button>
    </div>

    <div class="listBook">
        <div>
            <img data-url="{{ route('books_detail', ['title' => 'The Bubbles']) }}" class="bookThumbnail" src="https://instructionalseries.tki.org.nz/var/tki-eesoll/storage/images/instructional-series/ready-to-read/bubbles/417807-1-eng-NZ/Bubbles_resource_image.jpg" alt="">
        </div>
        <div>
            <img class="bookThumbnail" src="https://mi.content.readinga-z.com/raz_book_image/1617/projectable/large/1/book/page-1.jpg" alt="">
        </div>
        <div>
            <img class="bookThumbnail" src="https://mi.content.readinga-z.com/raz_book_image/1603/projectable/large/1/book/page-1.jpg" alt="">
        </div><div>
            <img class="bookThumbnail" src="https://mi.content.readinga-z.com/raz_book_image/1678/projectable/large/1/book/page-1.jpg" alt="">
        </div>
    </div>
    <br />
    <div>
        <button class="btn btn-primary">View more books</button>
    </div>
@endSection
@section('page-script')
    <script>
        $(document).ready(function() {
            $('.bookThumbnail').click(function() {
                const url = $(this).data('url');
                if(url) {
                    window.location.href = url;
                }
            });
        });
    </script>
@endsection
