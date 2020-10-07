@extends('layouts.main')
@section('title', 'The Bubbles')
@section('content')
    <style>
        .contentDetail {
            display: grid;
            grid-template-columns: 1fr 2fr;
        }
        .rightSide {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .rightSide .item {
            display: grid;
            grid-template-columns: 55px auto;
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            margin: 5px;
            padding: 10px;
            border: 1px solid darkgray;
            border-radius: 5px;
            cursor: pointer;
        }
        .rightSide .item:hover {
            background-color: lightblue;
        }
        .titleSection {
            font-weight: bold;
            color: #0391CF;
        }
    </style>
    <h1 class="pageTitle">The Bubbles</h1>
    <div class="contentDetail">
        <div class="leftSide">
            <img src="https://instructionalseries.tki.org.nz/var/tki-eesoll/storage/images/instructional-series/ready-to-read/bubbles/417807-1-eng-NZ/Bubbles_resource_image.jpg" width="250px" alt="">
        </div>
        <div class="rightSide">
            @if(\Illuminate\Support\Facades\Session::get('type-login') === 'teacher')
                <div class="item">
                    <div><img src="https://i.pinimg.com/originals/fb/fc/79/fbfc7905f17f5c4a65df4498f318cede.png" width="50px" alt=""></div>
                    <div><span class="titleSection">Digital Books with Colorful Pictures,</span><br />Teachers can project the book on a slide projector and follow shared reading approach.</div>
                </div>
                <div class="item">
                    <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Audio_Book_Icon_2.svg/1200px-Audio_Book_Icon_2.svg.png" width="50px" alt=""></div>
                    <div><span class="titleSection">An audio book</span><br />Teachers can play this audio if he/ she wants to play another good model of reading to students</div>
                </div>
                <div class="item">
                    <div><img src="https://cdn0.iconfinder.com/data/icons/simple-set-of-help-support-and-contact-us/64/__1464_px-512.png" width="50px" alt=""></div>
                    <div><span class="titleSection">Instructions |Guided Questions | Glossary</span><br />This gives teachers ideas of what questions to ask learners while reading the book aloud to them.</div>
                </div><div class="item">
                    <div><img style="border-radius: 30px;" src="https://image.freepik.com/free-icon/black-music-icon_318-9277.jpg" width="50px" alt=""></div>
                    <div><span class="titleSection">Background music</span><br /> It fits the book’s context (Suggestopedia Approach).<br />Teachers can use it while reading a book aloud to students.</div>
                </div><div class="item">
                    <div><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/puzzle-1500570-1271215.png" width="50px" alt=""></div>
                    <div><span class="titleSection">Suggested Activities | Teaching Materials</span><br />Teachers can use for post activities while exploiting shared reading approach.</div>
                </div>
            @else
                <div class="item">
                    <div><img src="https://i.pinimg.com/originals/fb/fc/79/fbfc7905f17f5c4a65df4498f318cede.png" width="50px" alt=""></div>
                    <div><span class="titleSection">Digital Books with Colorful Pictures,</span><br />Learners/ Parents can view the book by using their smart phones, laptops or iPads</div>
                </div>
                <div class="item">
                    <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Audio_Book_Icon_2.svg/1200px-Audio_Book_Icon_2.svg.png" width="50px" alt=""></div>
                    <div><span class="titleSection">An audio book</span><br />Student can listen to a good model of reading</div>
                </div>
                <div class="item">
                    <div><img src="https://cdn0.iconfinder.com/data/icons/simple-set-of-help-support-and-contact-us/64/__1464_px-512.png" width="50px" alt=""></div>
                    <div><span class="titleSection">Instructions |Guided Questions | Glossary</span><br />Parents can use these questions to ask their children if they read the book aloud together. If learners read on their own, they can also read these questions to gain some ideas about the text.</div>
                </div><div class="item">
                    <div><img src="https://cdn1.iconfinder.com/data/icons/education-solid-icons-vol-1/48/008-512.png" width="50px" alt=""></div>
                    <div><span class="titleSection">Post-exercises</span><br />Students can check their comprehension by completing the post tasks.</div>
            @endif
        </div>
    </div>

@endSection
