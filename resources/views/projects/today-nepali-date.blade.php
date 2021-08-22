
@extends('layout.app')
@section('title','Blogs | Kshitiz Shrestha')

@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="title" content="Today's Nepali Date">
    <meta name="description" content="Today Nepali Date is {{TodayDate::nepali()}}.">
    <meta name="keywords" content="today's nepali date, today nepali date, today date in nepali">


{{--    <!-- Open Graph / Facebook -->--}}
{{--    <meta property="og:type" content="website">--}}
{{--    <meta property="og:url" content="{{ route('showBlogs') }}">--}}
{{--    <meta property="og:title" content="Blogs | Kshitiz Shrestha">--}}
{{--    <meta property="og:description" content="{{ setting('admin.meta_description') }}">--}}
{{--    <meta property="og:image" content="{{ Voyager::image(setting('admin.meta_image')) }}">--}}

{{--    <!-- Twitter -->--}}
{{--    <meta property="twitter:card" content="summary_large_image">--}}
{{--    <meta property="twitter:url" content="{{ route('showBlogs') }}">--}}
{{--    <meta property="twitter:title" content="Blogs | Kshitiz Shrestha">--}}
{{--    <meta property="twitter:description" content="{{ setting('admin.meta_description') }}">--}}
{{--    <meta property="twitter:image" content="{{ Voyager::image(setting('admin.meta_image')) }}">--}}
    <style>
        .today-nepali-date{
            font-family: 'Nunito', sans-serif;
            text-align: center;
            margin-bottom: 0px;
        }
    </style>

@endsection


@section('body')


    <section>
        <div class="container mt-4">
            <hr>
            <div class="row">
                <div class="col">
                    <h3 class="today-nepali-date">Today's Nepali Date is: <strong>{{TodayDate::nepali()}}</strong></h3>
                </div>
                <hr>
            </div>
            <hr>
        </div>
    </section>

@endsection
