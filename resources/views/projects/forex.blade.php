
@extends('layout.app')
@section('title','Rashifal')
@section('canonical')
    <link rel=“canonical” href=“{{ env('APP_URL').'/forex' }}” />
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
    <meta name="keywords" content="nepali forex, forex in nepali, forex">



	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ env('APP_URL').'/forex' }}">
	<meta property="og:title" content="Today's Forex">
	<meta property="og:description" content="Checkout today's forex in nepali">
	<meta property="og:image" content="https://cdn.educba.com/academy/wp-content/uploads/2014/05/Forex-Market-1.jpg">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="{{ env('APP_URL').'/forex' }}">
	<meta property="twitter:title" content="Today's Rashifal">
	<meta property="twitter:description" content="Checkout today's forex in nepali">
	<meta property="twitter:image" content="https://cdn.educba.com/academy/wp-content/uploads/2014/05/Forex-Market-1.jpg">

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
                        <h1 class="breadcrumb-title">Today's Forex</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pt-5 pb-5 pb-lg-1">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Forex</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="gray">
        <div class="container">

            <!-- row Start -->
            <div class="row">
                <table class="table table-hover table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Currency</th>
                            <th>Buy</th>
                            <th>Sell</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($forex as $item)
                            <tr>
                                <td>{{$item[0]}}</td>
                                <td>{{$item[1]}}</td>
                                <td>{{$item[2]}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Agency List End ================================== -->

@endsection


@section('js')
    <script>
        $('.article_body_wrap>p>img').addClass('img-fluid');
        $('iframe').addClass('embed-responsive-item');
        $('iframe').wrap("<div class='embed-responsive embed-responsive-16by9'></div>");
    </script>
@endsection
