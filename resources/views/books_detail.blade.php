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
        }
    </style>
    <h1 class="pageTitle">The Bubbles</h1>
    <div class="contentDetail">
        <div class="leftSide">
            <img src="https://images-na.ssl-images-amazon.com/images/I/611eO5mndNL.jpg" width="250px" alt="">
        </div>
        <div class="rightSide">
            <div class="item">
                <div><img src="https://i.pinimg.com/originals/fb/fc/79/fbfc7905f17f5c4a65df4498f318cede.png" width="50px" alt=""></div>
                <div>Digital Books with Colorful Pictures, <br />Teachers will project the book on a slide projector and follow shared reading approach.</div>
            </div>
            <div class="item">
                <div><img src="https://i.pinimg.com/originals/fb/fc/79/fbfc7905f17f5c4a65df4498f318cede.png" width="50px" alt=""></div>
                <div>An audio book <br />If teachers want to play another good model of reading to students.</div>
            </div>
            <div class="item">
                <div><img src="https://i.pinimg.com/originals/fb/fc/79/fbfc7905f17f5c4a65df4498f318cede.png" width="50px" alt=""></div>
                <div>Instructions |Guided Questions | Glossary <br />Teachers can have ideas of what questions to ask learners while reading the book aloud to them.</div>
            </div><div class="item">
                <div><img src="https://i.pinimg.com/originals/fb/fc/79/fbfc7905f17f5c4a65df4498f318cede.png" width="50px" alt=""></div>
                <div>Background music that fits the book’s context (Suggestopedia Approach)</div>
            </div><div class="item">
                <div><img src="https://i.pinimg.com/originals/fb/fc/79/fbfc7905f17f5c4a65df4498f318cede.png" width="50px" alt=""></div>
                <div>Suggested Activities | Teaching Materials <br />Teachers can use for post activities while exploiting shared reading approach.</div>
            </div>


        </div>
    </div>

@endSection
