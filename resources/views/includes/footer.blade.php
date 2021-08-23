
			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row">

							<div class="col-lg-3 col-md-3">
								<div class="footer-widget">
									<img src="/assets/img/logo-light.png" class="img-footer" alt="" />
									<div class="footer-add">
										<p>Hetauda-11, Makwanpur</p>
										<p>+977 9861519373</p>
										<p>er.kshitizshrestha@gmail.com</p>
									</div>

								</div>
							</div>
							<div class="col-lg-2 col-md-3">
								<div class="footer-widget">
									<h4 class="widget-title">Navigations</h4>
									<ul class="footer-menu">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('showBlogs') }}">Blogs</a></li>
                                        <li><a href="{{ route('todayNepaliDate') }}">Today's Nepali Date</a></li>
                                        <li><a href="{{ route('rashifal') }}">Rashifal</a></li>
                                        <li><a href="{{ route('forex') }}">Forex</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-2 col-md-3">
								<div class="footer-widget">
									<h4 class="widget-title">Top Blog's Category</h4>
									<ul class="footer-menu">
										@foreach(\App\Category::all() as $item)
                                            <li><a href="/blogs?category={{$item->slug}}">{{ $item->title }}</a></li>
                                        @endforeach
									</ul>
								</div>
							</div>

							<div class="col-lg-2 col-md-3">
								<div class="footer-widget">
									<h4 class="widget-title">Help & Support</h4>
									<ul class="footer-menu">
										<li><a href="#">Esewa</a></li>
										<li><a href="#">Live Chat</a></li>
										<li><a href="#">Mail Me</a></li>
										<li><a href="#">Faqs</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3 col-md-12">
								<div class="footer-widget">
									<h4 class="widget-title">Follow Me on</h4>
									<a href="https://instagram.com/kshitiz_shrestha" class="other-store-link">
										<div class="other-store-app">
											<div class="os-app-icon">
												<i class="ti-instagram theme-cl"></i>
											</div>
											<div class="os-app-caps">
												Instagram
												<span>Follow</span>
											</div>
										</div>
									</a>
									<a href="https://www.facebook.com/kshitiz5hrestha" class="other-store-link">
										<div class="other-store-app">
											<div class="os-app-icon">
												<i class="ti-facebook theme-cl"></i>
											</div>
											<div class="os-app-caps">
												Facebook
												<span>Follow</span>
											</div>
										</div>
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">

							<div class="col-lg-6 col-md-6">
								<p class="mb-0">© 2020 Kshitiz Shrestha. Designd By <a href="https://kshitizstha.com.np">Kshitiz Shrestha</a>.</p>
							</div>

						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
