
@extends('layout.app')
@section('title',$blog->title)
@section('canonical')
    <link rel=“canonical” href=“{{ route('showBlogDetails',$blog->slug) }}” />
@endsection

@section('header')
    <header>
        <time class="op-published" datetime="{{ $blog->created_at }}" />
    </header>
@endsection

@section('meta')
	<!-- Primary Meta Tags -->
	<meta name="title" content="{{ $blog->title }}">
	<meta name="description" content="{{ $blog->meta_description }}">



	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ route('showBlogDetails',$blog->slug) }}">
	<meta property="og:title" content="{{ $blog->title }}">
	<meta property="og:description" content="{{ $blog->meta_description }}">
	<meta property="og:image" content="{{ Kshitiz::image($blog->image,'small') }}">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="{{ route('showBlogDetails',$blog->slug) }}">
	<meta property="twitter:title" content="{{ $blog->title }}">
	<meta property="twitter:description" content="{{ $blog->meta_description }}">
	<meta property="twitter:image" content="{{ Kshitiz::image($blog->image,'small') }}">

    <meta name="keywords" content="{{ $blog->meta_keywords }}">
    <meta name="author" content="Kshitiz Shrestha">
@endsection


@section('body')
{{-- 			
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    
                    <div class="breadcrumbs-wrap pt-2 pt-lg-5">
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
     --}}
    <!-- ============================ Agency List Start ================================== -->
    <section class="gray">
    
        <div class="container">
        
            <!-- row Start -->
            <div class="row">
            
                <!-- Blog Detail -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        <div class="article_body_wrap">
                        
                            <div class="article_featured_image">
                                <img class="img-fluid" src="{{ Kshitiz::image($blog->image) }}" alt="">
                            </div>
                            
                            <div class="article_top_info">
                                <ul class="article_middle_info">
                                    <li><span class="icons"><i class="ti-eye"></i></span>{{ $blog->views }}</li>
                                </ul>
                            </div>
                            <h2 class="post-title">{{ $blog->title }}</h2>
                            {!! $blog->body !!}
                            <div class="mt-3">
                                <a class="btn btn-primary" href="https://www.facebook.com/sharer/sharer.php?u={{ route('showBlogDetails',$blog->slug) }}&t={{ $blog->title }}"
                                onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                target="_blank" title="Share on Facebook"><i class="ti-facebook"></i> Share on Facebook
                                </a>
                                <a  class="btn btn-primary" href="https://twitter.com/share?url={{ route('showBlogDetails',$blog->slug) }}&via=TWITTER_HANDLE&text=TEXT"
                                onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                target="_blank" title="Share on Twitter"><i class="ti-twitter"></i> Share on Twitter
                                </a>
                            </div>
                                

									<div class="single_article_pagination">
										<div class="prev-post">
											<a href="{{ $previousBlogSlug  ? route('showBlogDetails',$previousBlogSlug) : '#' }}" class="theme-bg {{ $previousBlogSlug ? '' : 'theme-btn-disabled' }}">
												<div class="title-with-link">
													<span class="intro">Previous Post</span>
												</div>
											</a>
										</div>
										<div class="article_pagination_center_grid">
											<a href="{{ route('showBlogs') }}"><i class="ti-layout-grid3"></i></a>
										</div>
										<div class="next-post">
											<a href="{{ $nextBlogSlug  ? route('showBlogDetails',$nextBlogSlug) : '#' }}" class="theme-bg {{ $nextBlogSlug ? '' : 'theme-btn-disabled' }}">
												<div class="title-with-link">
													<span class="intro">Next Post</span>
												</div>
											</a>
										</div>
									</div>
                            
                        </div>
                    </div>
                    
                    <!-- Author Detail -->
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        
                        <div class="article_posts_thumb">
                            <span class="img"><img class="img-fluid" src="{{ Kshitiz::image(setting('site.author_image')) }}" alt="Kshitiz Shrestha"></span>
                            <h3 class="pa-name">Kshitiz Shrestha</h3>
                            <ul class="social-links">
                                <li><a href="https://facebook.com/kshitz5hrestha"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/kshitiz_shrestha"><i class="fab fa-instagram"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-behance"></i></a></li> --}}
                                {{-- <li><a href="#"><i class="fab fa-youtube"></i></a></li> --}}
                                {{-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
                            </ul>
                            <p class="pa-text">Hello! I’m Kshitiz Shrestha. Web Developer with over 2 years of experience. Experienced with all stages of the development cycle for dynamic web projects. Having an in-depth knowledge including advanced HTML5, CSS3, JavaScript, jQuery, Php, Laravel, Vue.js. I aim to make a difference through my creative solution.I started doing blogs on 2020.</p>
                        </div>
                        
                    </div>
                    {{--                     
                    <!-- Blog Comment -->
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        
                        <div class="comment-area">
                            <div class="all-comments">
                                <h3 class="comments-title">05 Comments</h3>
                                <div class="comment-list">
                                    <ul>
                                        <li class="article_comments_wrap">
                                            <article>
                                                <div class="article_comments_thumb">
                                                    <img src="assets/img/user-1.jpg" alt="">
                                                </div>
                                                <div class="comment-details">
                                                    <div class="comment-meta">
                                                        <div class="comment-left-meta">
                                                            <h4 class="author-name">Rosalina Kelian <span class="selected"><i class="fas fa-bookmark"></i></span></h4>
                                                            <div class="comment-date">19th May 2018</div>
                                                        </div>
                                                        <div class="comment-reply">
                                                            <a href="#" class="reply"><span class="icona"><i class="ti-back-left"></i></span> Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                            perspiciatis unde omnis iste natus error.</p>
                                                    </div>
                                                </div>
                                            </article>
                                            <ul class="children">
                                                <li class="article_comments_wrap">
                                                    <article>
                                                        <div class="article_comments_thumb">
                                                            <img src="assets/img/user-2.jpg" alt="">
                                                        </div>
                                                        <div class="comment-details">
                                                            <div class="comment-meta">
                                                                <div class="comment-left-meta">
                                                                    <h4 class="author-name">Rosalina Kelian</h4>
                                                                    <div class="comment-date">19th May 2018</div>
                                                                </div>
                                                                <div class="comment-reply">
                                                                    <a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                                    perspiciatis unde omnis iste natus error.</p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <ul class="children">
                                                        <li class="article_comments_wrap">
                                                            <article>
                                                                <div class="article_comments_thumb">
                                                                    <img src="assets/img/user-4.jpg" alt="">
                                                                </div>
                                                                <div class="comment-details">
                                                                    <div class="comment-meta">
                                                                        <div class="comment-left-meta">
                                                                            <h4 class="author-name">Rosalina Kelian</h4>
                                                                            <div class="comment-date">19th May 2018</div>
                                                                        </div>
                                                                        <div class="comment-reply">
                                                                            <a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-text">
                                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                                            perspiciatis unde omnis iste natus error.</p>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="article_comments_wrap">
                                            <article>
                                                <div class="article_comments_thumb">
                                                    <img src="assets/img/user-5.jpg" alt="">
                                                </div>
                                                <div class="comment-details">
                                                    <div class="comment-meta">
                                                        <div class="comment-left-meta">
                                                            <h4 class="author-name">Rosalina Kelian</h4>
                                                            <div class="comment-date">19th May 2018</div>
                                                        </div>
                                                        <div class="comment-reply">
                                                            <a href="#" class="reply"><span class="icons"><i class="ti-back-left"></i></span> Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                            perspiciatis unde omnis iste natus error.</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-box submit-form">
                                <h3 class="reply-title">Post Comment</h3>
                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <textarea name="comment" class="form-control" cols="30" rows="6" placeholder="Type your comments...."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <a href="#" class="btn search-btn">Submit Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div> --}}
                    
                    
                </div>
                
                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    
                    <!-- Searchbard -->
                    <div class="single_widgets widget_search">
                        <h4 class="title">Search</h4>
                        <form action="#" class="sidebar-search-form">
                            <input type="search" name="search" placeholder="Search..">
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="single_widgets widget_category">
                        <h4 class="title">Categories</h4>
                        <ul>
                            @foreach ($categories as $item)
                                <li><a href="/blogs?category={{$item->slug}}">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Trending Posts -->
                    <div class="single_widgets widget_thumb_post">
                        <h4 class="title">Trending Posts</h4>
                        <ul>
                            @foreach ($trendings as $item)
                                <li>
                                    <span class="left">
                                        <img src="{{ Kshitiz::image($item->image,'small') }}" alt="" class="">
                                    </span>
                                    <span class="right">
                                        <a class="feed-title" href="{{ route('showBlogDetails',$item->slug) }}">{{ $item->title }}</a> 
                                        <span class="post-date"><i class="ti-calendar"></i>{{ $item->created_at->diffForHumans() }}</span>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Tags Cloud -->
                    <div class="single_widgets widget_tags">
                        <h4 class="title">Tags Cloud</h4>
                        <ul>
                            @foreach ($tags as $item)
                                <li><a href="/blogs?tags={{ $item }}">{{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
                
            </div>
            <!-- /row -->					
            
        </div>
                
    </section>
    <!-- ============================ Agency List End ================================== -->
	
@endsection


@section('js')
    <script>
        $('iframe').addClass('embed-responsive-item');
        $('iframe').wrap("<div class='embed-responsive embed-responsive-16by9'></div>");
    </script>
@endsection