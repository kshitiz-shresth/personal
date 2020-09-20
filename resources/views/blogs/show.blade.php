
@extends('layout.app')
@section('title','Blogs | Kshitiz Shrestha')

@section('meta')
	<!-- Primary Meta Tags -->
	<meta name="title" content="Blogs | Kshitiz Shrestha">
	<meta name="description" content="{{ setting('admin.meta_description') }}">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ route('showBlogs') }}">
	<meta property="og:title" content="Blogs | Kshitiz Shrestha">
	<meta property="og:description" content="{{ setting('admin.meta_description') }}">
	<meta property="og:image" content="{{ Voyager::image(setting('admin.meta_image')) }}">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="{{ route('showBlogs') }}">
	<meta property="twitter:title" content="Blogs | Kshitiz Shrestha">
	<meta property="twitter:description" content="{{ setting('admin.meta_description') }}">
	<meta property="twitter:image" content="{{ Voyager::image(setting('admin.meta_image')) }}">

@endsection


@section('body')
			
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">Blogs</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pt-5 pb-5 pb-lg-1">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->	
    
    <!-- ========================== Articles Section =============================== -->
    <section class="pt-5">
        <div class="container">
            
            <div class="row">
                @foreach ($blogs as $item)
                <!-- Single Article -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="articles_grid_style">
                        <div class="articles_grid_thumb">
                            <a href="{{ route('showBlogDetails',$item->slug) }}"><img src="{{ Kshitiz::image($item->image,'cropped') }}" class="img-fluid" alt="" /></a>
                        </div>
                        
                        <div class="articles_grid_caption">
                            <h4>{{ $item->title }}</h4>
                            <div class="articles_grid_author">
                                <h4><i class="ti-time"></i>  {{ $item->created_at->diffForHumans() }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforeach
                
        </div>
    </section>
    <!-- ========================== Articles Section =============================== -->
    {{--     
    <!-- ============================== Start Newsletter ================================== -->
    <section class="newsletter theme-bg inverse-theme">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="text-center">
                        <h2>Join Thousand of Happy Students!</h2>
                        <p>Subscribe our newsletter & get latest news and updation!</p>
                        <form class="sup-form">
                            <input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
                            <input type="submit" class="btn btn-theme" value="Get Started">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= End Newsletter =============================== -->
     --}}
@endsection