@extends('layout.app')

@section('title','Kshitiz Shrestha')


@section('body')
            <div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover hero_banner hero-inner-2" style="background:#032656;" data-overlay="0">
				<div class="container">
					<!-- Type -->
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="banner-search-2 transparent">
								<div class="nepali">

								<h1 class="big-header-capt cl_2 mb-2 f_2">नमस्कार !!<br>मेरो नाम <span class="kshitiz">क्षितिज</span></h1>
								<p>मेरो संसारमा तपाँईहरुलाई स्वागत छ।</p>
								<div class="mt-4">
									<a href="#" class="btn btn-modern dark"><strong>थप जानकारी</strong><span><i class="ti-arrow-right"></i></span></a>
								</div>
								</div>

							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="flixio pt-5">
                                <img class="img-fluid" src="/assets/images/myAvatar.svg" alt="">
                            </div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- ============================ Trips Facts Start ================================== -->
			<div class="trips_wrap full colored">
				<div class="container">
					<div class="row m-0">
					
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips">
								<div class="trips_icons">
									<i class="ti-mouse-alt"></i>
								</div>
								<div class="trips_detail">
									<h4>Technical Courses</h4>
									<p>As i am computer engineer, i will be posting a lots of technical stuffs with a very good tutorial</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips">
								<div class="trips_icons">
									<i class="ti-pencil"></i>
								</div>
								<div class="trips_detail">
									<h4>Blogs</h4>
									<p>I love writing. I will post latest news, controversial topics and many entertaining stuffs.</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips none">
								<div class="trips_icons">
									<i class="ti-music-alt"></i>
								</div>
								<div class="trips_detail">
									<h4>My Musical Journey</h4>
									<p>I have good experience in producing music. I will post my new creation as well as tutorials of music Production.</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- ============================ Trips Facts Start ================================== -->
			
			<!-- ============================ Hero Banner End ================================== -->
			{{-- 			
			
			<!-- ========================== Featured Category Section =============================== -->
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Popular Category</p>
								<h2><span class="theme-cl">Hot & Popular</span> Category For Learn</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-1">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/content.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Development</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>23 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-2">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/briefcase.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Business</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>58 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-3">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/career.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Accounting</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>74 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-4">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/python.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">IT & Software</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>65 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-10">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/designer.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Art & Design</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>43 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-6">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/speaker.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Marketing</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>82 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-7">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/photo.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Photography</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>25 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-8">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/yoga.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Health & Fitness</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>43 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-9">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="/assets/img/health.png" class="img-fluid" alt="" /></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Lifestyle</a></h4>
									<ul class="meta">
										<li class="video"><i class="ti-video-clapper"></i>38 Classes</li>
									</ul>
								</div>
							</div>							
						</div>
					</div>
					
				</div>
			</section>
			<!-- ========================== Featured Category Section =============================== -->
			
			<!-- ============================ Featured Courses Start ================================== -->
			<section class="gray">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Hot &amp; Trending</p>
								<h2><span class="theme-cl">Recent</span> Courses by professional Instructor</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="/assets/img/co-1.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$520</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">Tableau For Beginners: Get CA Certified, Grow Your Career</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>8682 Views</li>
										<li><i class="ti-time mr-2"></i>6h 40min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="/assets/img/user-1.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Robert Wilson</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>54 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="/assets/img/co-2.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$349</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">The Complete Business Plan Course (Includes 50 Templates)</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>9882 Views</li>
										<li><i class="ti-time mr-2"></i>6h 30min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="/assets/img/user-2.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Shruti Hasan</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>26 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="/assets/img/co-3.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$545</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">An Entire MBA In 1 Course:Award Winning Business School Prof</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>5893 Views</li>
										<li><i class="ti-time mr-2"></i>5h 15min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="/assets/img/user-3.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Adam Viknoi</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>52 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="/assets/img/co-4.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$420</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">The Complete Financial Analyst Course 2020</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>8582 Views</li>
										<li><i class="ti-time mr-2"></i>4h 59min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.6 Reviews</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="/assets/img/user-4.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Shilpa Shekh</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>43 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="/assets/img/co-5.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$429</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">PMP Exam Prep Seminar - PMBOK Guide 6</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>9857 Views</li>
										<li><i class="ti-time mr-2"></i>7h 45min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.9 Reviews</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="/assets/img/user-5.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Shaurya Preet</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>32 lectures</div>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="/assets/img/co-6.jpg" class="img-fluid" alt=""></a>
									<div class="cources_price">$249</div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">Tableau 2020 A-Z:Hands-On Tableau Training For Data Science!</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-eye mr-2"></i>6852 Views</li>
										<li><i class="ti-time mr-2"></i>2h 30min</li>
										<li><i class="ti-star text-warning mr-2"></i>4.8 Reviews</li>
									</ul>
								</div>
								
								<div class="education_block_footer">
									<div class="education_block_author">
										<div class="path-img"><a href="instructor-detail.html"><img src="/assets/img/user-6.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="instructor-detail.html">Preeti Bhartiya</a></h5>
									</div>
									<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>48 lectures</div>
								</div>
								
							</div>	
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ============================ Featured Courses End ================================== -->
			
			<!-- ========================== About Facts List Section =============================== -->
			<section>
				<div class="container">
					
					<div class="row align-items-center">
					
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="about-short">
								<div class="sec-heading mb-3">
									<h2>Know about <span class="theme-cl">e-Learn</span> learning platform</h2>
								</div>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et voluptatem.</p>
								<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut</p>
								<div class="cource_facts">
									<ul>
										<li><span class="theme-cl">7m</span>Active Cources</li>
										<li><span class="theme-cl">77k</span>Student Learning</li>
										<li><span class="theme-cl">84+</span>Free Cources</li>
									</ul>
								</div>
								<a href="#" class="btn btn-modern">Know More<span><i class="ti-arrow-right"></i></span></a>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="list_facts_wrap_img">
							
								<img src="/assets/img/edu_2.png" class="img-fluid" alt="">
								
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
			<!-- ============================ Featured Instructor Start ================================== -->
			<section class="pt-0">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Meet Instructors</p>
								<h2><span class="theme-cl">Top & Famous</span> Instructor in Your City</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
						
							<div class="four_slide-dots articles arrow_middle">
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="/assets/img/user-1.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Daniel Diwansker</a></h4>
											<span>Web Designer</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="/assets/img/user-2.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Shilpa Singh</a></h4>
											<span>Team Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="/assets/img/user-3.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Adam Wistom</a></h4>
											<span>Sales Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="/assets/img/user-4.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Ragini Singh</a></h4>
											<span>Business Executing</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="/assets/img/user-5.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Daniel Wilson</a></h4>
											<span>HR Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							
							</div>
						
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Featured Instructor End ================================== -->
			
			<!-- ========================== Articles Section =============================== -->
			<section class="bg-light">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Our Story</p>
								<h2><span class="theme-cl">Recent</span> Articles to You</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
								
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="blog-detail.html"><img src="/assets/img/b-1.jpg" class="img-fluid" alt="" /></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>The National Minimum wage is an important part</h4>
									<div class="articles_grid_author">
										<div class="articles_grid_author_img"><img src="/assets/img/user-1.jpg" class="img-fluid" alt="" /></div>
										<h4>Adam Willsone</h4>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="blog-detail.html"><img src="/assets/img/b-2.jpg" class="img-fluid" alt="" /></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>The National Minimum wage is an important part</h4>
									<div class="articles_grid_author">
										<div class="articles_grid_author_img"><img src="/assets/img/user-2.jpg" class="img-fluid" alt="" /></div>
										<h4>Rikki Sen</h4>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="blog-detail.html"><img src="/assets/img/b-3.jpg" class="img-fluid" alt="" /></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>The National Minimum wage is an important part</h4>
									<div class="articles_grid_author">
										<div class="articles_grid_author_img"><img src="/assets/img/user-3.jpg" class="img-fluid" alt="" /></div>
										<h4>Daniel Wikjones</h4>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</section>
			<!-- ========================== Articles Section =============================== -->
			
			<!-- ========================== Brand Section =============================== -->
			<section>
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>New &amp; Trending</p>
								<h2><span class="theme-cl">Trusted</span> by our professional partner</h2>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="single_brand" id="brand-slide">
								
								<!-- single -->
								<div class="single_brands">
									<img src="/assets/img/brand-1.png" class="img-fluid" alt="" />
								</div>
								
								<!-- single -->
								<div class="single_brands">
									<img src="/assets/img/brand-2.png" class="img-fluid" alt="" />
								</div>
								
								<!-- single -->
								<div class="single_brands">
									<img src="/assets/img/brand-3.png" class="img-fluid" alt="" />
								</div>
								
								<!-- single -->
								<div class="single_brands">
									<img src="/assets/img/brand-4.png" class="img-fluid" alt="" />
								</div>
								
								<!-- single -->
								<div class="single_brands">
									<img src="/assets/img/brand-5.png" class="img-fluid" alt="" />
								</div>
								
								<!-- single -->
								<div class="single_brands">
									<img src="/assets/img/brand-6.png" class="img-fluid" alt="" />
								</div>
								
								<!-- single -->
								<div class="single_brands">
									<img src="/assets/img/brand-7.png" class="img-fluid" alt="" />
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ========================== Brand Section =============================== -->
			
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
			
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="Username">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*******">
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Login</button>
									</div>
								
								</form>
							</div>
							
							<div class="social-login mb-3">
								<ul>
									<li>
										<input id="reg" class="checkbox-custom" name="reg" type="checkbox">
										<label for="reg" class="checkbox-custom-label">Save Password</label>
									</li>
									<li><a href="#" class="theme-cl">Forget Password?</a></li>
								</ul>
							</div>
							
							<div class="text-center">
								<p class="mt-2">Haven't Any Account? <a href="register.html" class="link">Click here</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Sign Up Modal -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Sign Up</h4>
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Full Name">
									</div>
									
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email">
									</div>
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Username">
									</div>
									
									<div class="form-group">
										<input type="password" class="form-control" placeholder="*******">
									</div>

									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
									</div>
								
								</form>
							</div>
							<div class="text-center">
								<p class="mt-3"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			 --}}
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			    
@endsection