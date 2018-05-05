	<!-- HERO SECTION  -->
	<div class="site-hero_2">
		<div class="page-title">
			<div class="big-title montserrat-text uppercase">blog posts</div>
			<div class="small-title montserrat-text uppercase">home / blog</div>
		</div>
	</div>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12">
					<!-- blog post -->
					<?php
	
					if(!empty($data)) // This should be put in the model, but now not enough time to do this :(
					{
					for ($x = 0; $x < $data[2]; $x++) 
					{ 
						$content[$x] = $data[1][$x]; // This should be put in the model, but now not enough time to do this :( 
						$preview[$x] = substr($content[$x], 0, 250); // This should be put in the model, but now not enough time to do this :( 

						echo '<div class="blog_post wow fadeInUp">
								<div class="post_media">
								
								</div>
								<div class="post_info">
									<div class="post_date montserrat-text uppercase" style="width: 200px"></div>
									<i class="icon ion-chatbox-working"></i>
									<i class="icon ion-ios-heart"></i>
								</div>

							<p>'.$preview[$x].'...</p>' 
							.'<a href="/article/'.$data[0][$x].'" class="link montserrat-text uppercase">continue reading <i class="icon ion-arrow-right-c"></i></a>
						</div>';	
						}
					}
					?>
					<!-- blog post -->
					<!-- pagination -->
					<div class="blog_pagination wow fadeInUp">
						<a href="" class="page">
							<i class="icon ion-arrow-left-c prev"></i>
							<span>previous</span>
						</a>
						<span class="divisor">/</span>
						<a href="" class="page">
							<span>next</span>
							<i class="icon ion-arrow-right-c next"></i>
						</a>
					</div>
				</div><!-- end col -->

				<div class="col-md-3">
					<div class="sidebar">
						<div class="widget">
							<div class="input_2">
								<input type="text" placeholder="search...">
								<button type="submit"><i class="icon ion-search"></i></button>
							</div>
						</div>
						<div class="widget">
							<div class="widget_title">posts</div>
							<div class="tab">
								<nav>
									<a href="">popular</a>
									<a href="">latest</a>
									<div class="bottom-line"></div>
								</nav>
								<div class="tab_single shown">
									<div class="related_post">
										<div class="thumb"><img src="application/views/assets/img/thumb.jpg" alt="image"></div>
										<a href="" class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
									<div class="related_post">
										<div class="thumb"><img src="application/views/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
									<div class="related_post">
										<div class="thumb"><img src="application/views/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
								</div>
								<div class="tab_single">
									<div class="related_post">
										<div class="thumb"><img src="application/views/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
									<div class="related_post">
										<div class="thumb"><img src="application/views/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
									<div class="related_post">
										<div class="thumb"><img src="application/views/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
								</div>
							</div>
						</div>

						<div class="widget wow fadeInUp">
							<div class="widget_title">categories</div>
							<ul class="list_2">
								<li><a href="">Business	<span>15</span></a></li>
								<li><a href="">Photography	<span>22</span></a></li>
								<li><a href="">Journal	<span>27</span></a></li>
								<li><a href="">Web development	<span>30</span></a></li>
							</ul>
						</div>

						<div class="widget wow fadeInUp">
							<div class="widget_title">tags cloud</div>
							<ul class="tags">
								<li><a href="">css</a></li>
								<li><a href="">html</a></li>
								<li><a href="">javascript</a></li>
								<li><a href="">jquery</a></li>
								<li><a href="">bootstrap</a></li>
								<li><a href="">web development</a></li>
								<li><a href="">ui &amp; ux</a></li>
							</ul>
						</div>

						<div class="widget wow fadeInUp">
							<div class="widget_title">instagram</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="application/views/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="application/views/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="application/views/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="application/views/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="application/views/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="application/views/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="application/views/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="application/views/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
						</div>

						<div class="widget wow fadeInUp">
							<div class="widget_title">archives</div>
							<ul class="list_2">
								<li><a href="">Jan-Feb 2015	<span>15</span></a></li>
								<li><a href="">Feb-Mar 2015	<span>22</span></a></li>
								<li><a href="">Mar-Apr 2015	<span>27</span></a></li>
								<li><a href="">Apr-May 2015	<span>30</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>