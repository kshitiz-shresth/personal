
@extends('layout.app')
@section('title','Rashifal')
@section('canonical')
    <link rel=“canonical” href=“{{ env('APP_URL').'/rashifal' }}” />
@endsection

@section('header')
    <header>
        <time class="op-published" datetime="{{ now() }}" />
    </header>
@endsection

@section('meta')
	<!-- Primary Meta Tags -->
	<meta name="title" content="Nepali Rashifal">
	<meta name="description" content="See today's Rashifal in Nepali">
    <meta name="keywords" content="nepali rashifal, rashifal in nepali, rashifal">



	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ env('APP_URL').'/rashifal' }}">
	<meta property="og:title" content="Today's Rashifal">
	<meta property="og:description" content="Checkout today's rashifal in nepali">
	<meta property="og:image" content="https://static.india.com/wp-content/uploads/2021/06/Horoscope-Today-17-June.jpg">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="{{ env('APP_URL').'/rashifal' }}">
	<meta property="twitter:title" content="Today's Rashifal">
	<meta property="twitter:description" content="Checkout today's rashifal in nepali">
	<meta property="twitter:image" content="https://static.india.com/wp-content/uploads/2021/06/Horoscope-Today-17-June.jpg">

    <meta name="author" content="Kshitiz Shrestha">
    <style>
        .article_body_wrap>ul{
            list-style: inside;
        }
        .horoscope-img {
            filter: hue-rotate(210deg);
            width: 68px;
            height: auto;
        }

    </style>
@endsection


@section('body')
    <section class="page-title pb-3 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">आजको राशिफल</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pt-5 pb-5 pb-lg-1">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rashifal</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="gray">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
            @endforeach
            <div class="card">
                <div class="card-body row">
                    <div class="col">
                        <h3 class="text-dark" style="font-family:serif;">{{$title}}</h3>
                        <small>Source: Hamropatro</small>
                    </div>
                </div>
            </div>
            <!-- row Start -->
            <div class="row">
                @foreach($rashifal as $key=>$item)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h3>{{$item['title']}}</h3>
                                <img class="horoscope-img" src="{{$item['image']}}" class="card-img-left" alt="...">
                            </div>
                            <div class="card-body">
                                <p>{{$item['description']}}</p>
                            </div>
                            <form method="POST" class="card-footer" id="form{{$key}}" action="/subscribe">
                                <div class="input-group">
                                        @csrf
                                        <input type="email"  class="form-control" name="email" placeholder="Email Address" aria-label="Enter Email" aria-describedby="basic-addon2">
                                    <input type="hidden" name="rashifal_id" value="{{$key}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" onclick="submitForm({{$key}})" type="button">Subscribe</button>
                                        </div>
                                </div>
                            </form>

                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Agency List End ================================== -->

@endsection


@section('js')
    <script>
        function submitForm(key){
            $(`#form${key}`).submit();
        }
        $('.article_body_wrap>p>img').addClass('img-fluid');
        $('iframe').addClass('embed-responsive-item');
        $('iframe').wrap("<div class='embed-responsive embed-responsive-16by9'></div>");
    </script>
@endsection
