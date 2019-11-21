
<?php 
// i can use get_header function but my template header file is in template_file folder hence I am using get_tmeplate_part function to inculde in my header
get_template_part('template_files/header');
$asset_directory = get_bloginfo('template_url');
?>
	
	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>
			<header class="top_panel_wrap bg_tint_light" >
				
				<div class="border_bottom_grey font_086em display_none">
					<div class="content_wrap clearfix top_div">
						<div class="inline bottom top-panel_disclaimer">
							Advice and guides to help improve your finances!
						</div>
						<div class="inline bottom side-right">
							<div class="menu_user_area menu_user_left menu_user_contact_area">13005 Greenville Avenue California, TX 70240</div>
						</div>
						<div class="inline side-right search_s">
							<div class="search_wrap search_style_regular " title="Open/close search form">
								<a href="#" class="search_icon icon-search-2"> </a>
								<div class="search_form_wrap">
									<form role="search" method="get" class="search_form" action="index.html">
										<button type="submit" class="search_submit" data-text="Search" title="Start search">Search</button>
										<input type="text" class="search_field" placeholder="Search" value="" name="s" title="" />
									</form>
								</div>
								<div class="search_results widget_area bg_tint_light">
									<a class="search_results_close icon-delete-2"> </a>
									<div class="search_results_content"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			   
				<div class="menu_main_wrap with_text">
				       
					<div class="content_wrap clearfix display_none">
					           
						<div class="logo">
							<div class="logo_img">
								<a href="index.html">
									<img src="<?php echo $asset_directory;?>/images/60x60.png" class="logo_main" alt="">
									<img src="<?php echo $asset_directory;?>/images/60x60.png" class="logo_fixed" alt="">
								</a>
							</div>
							<div class="contein_logo_text">
								<a href="index.html">
									<span class="logo_text">Adviser</span>
									<span class="logo_slogan">We help save your money</span>
								</a>
							</div>
						</div>
						<div class="inline image side-right marg_top_2em top-panel_blocks">
							<div class="inline">
								<div class="inline-wrapper">
									<div class="side-right marg_null marg_top top-panel_left">
										<div class="icon_user-top">
											<i class="user_top_icon icon-telephone"></i>
										</div>
										<h4>(810) 123 4567</h4>
										<span class="font_086em">
											<a href="mailto:info@yoursite.com">info@yoursite.com</a>
										</span>
									</div>
								</div>
							</div>
							<div class="inline pad_left_2em">
								<div class="inline-wrapper">
									<div class="side-right marg_null marg_top top-panel_right">
										<div class="icon_user-top">
											<i class="user_top_icon icon-clock-4"> </i>
										</div>
										<h4>Mon - Sat 8.00- 20.00</h4>
										<span class="font_086em">Sunday  closed</span>
									</div>
								</div>
							</div>
						</div>
						<a href="#" class="menu_main_responsive_button icon-menu">Menu</a>
					           
					</div>
				           
					<div class="main-menu_wrap_bg">
						<div class="main-menu_wrap_content">
							<nav role="navigation" class="menu_main_nav_area">
								<ul id="menu_main" class="menu_main_nav">
									<li class="menu-item current-menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
										<a title="Home" href="index.html">Home</a>
										<ul class="sub-menu">
											<li class="menu-item current-menu-item">
												<a href="index.html">Homepage Default</a>
											</li>
											<li class="menu-item">
												<a href="index2.html">Homepage Optional</a>
											</li>
										</ul>
									</li>
									<li class="menu-item menu-item-has-children">
										<a title="Features" href="#">Features</a>
										<ul class="sub-menu">
											<li class="menu-item">
												<a title="Shortcodes" href="features-shortcodes.html">Shortcodes</a>
											</li>
											<li class="menu-item">
												<a title="Typography" href="features-typography.html">Typography</a>
											</li>
										</ul>
									</li>
									<li class="menu-item menu-item-has-children">
										<a title="Pages" href="#">Pages</a>
										<ul class="sub-menu">
											<li class="menu-item">
												<a title="About Us" href="pages-we-are-hiring.html">We Are Hiring</a>
											</li>
											<li class="menu-item">
												<a href="pages-our-staff.html">Our Staff</a>
											</li>
											<li class="menu-item">
												<a href="pages-about-us.html">About Us</a>
											</li>
											<li class="menu-item">
												<a title="Price table" href="pages-price-table.html">Price table</a>
											</li>
											<li class="menu-item">
												<a title="404" href="pages-404.html">404</a>
											</li>
										</ul>
									</li>
									<li class="menu-item">
										<a title="Our Services" href="our-services.html">Our Services</a>
									</li>
									<li class="menu-item menu-item-has-children">
										<a title="Our Blog" href="blog-our-blog.html">Our Blog</a>
										<ul class="sub-menu">
											<li class="menu-item">
												<a href="blog-with-sidebar.html">With Sidebar</a>
											</li>
											<li class="menu-item">
												<a href="blog-without-sidebar.html">Without sidebar</a>
											</li>
										</ul>
									</li>
									<li class="menu-item">
										<a title="Contact Us" href="contact-us.html">Contact Us</a>
									</li>
									<li class="advisor_black menu-item">
										<a title="Find Advisor" href="find-advisor.html">Find Advisor</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>

			</header>

			
		
			<div class="page_content_wrap">
				
				<section class="custom_columns">
					<div class="container">
						<div class="row">
							<div class="content_wrap">
								<div class="columns_wrap sc_columns">
									<div class="column-1_2 sc_column_item sc_column_item_1">
										<?php 
											if(have_posts()){
												while(have_posts()){
													the_post();
													the_content();
												}

											}
										 ?>
									</div>
									<div class="column-1_2 sc_column_item sc_column_item_2">
										<div class="sc_video_player">
											<div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play" data-width="100%" data-height="647" data-video="&lt;iframe class=&quot;video_frame&quot; src=&quot;https://youtube.com/embed/LRQEhLGAIfU?autoplay=1&quot; width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;" style="width:100%;">
												<img alt="" src="images/1150x767.png">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="grey_section">
					<div class="container">
						<div class="row">
							<div class="content_wrap">
								<h2 class="sc_title sc_align_center fig_border text-center" data-animation="animated fadeInUp normal">Professional Certificates</h2>
								<div class="margin_top_small margin_bottom_middle aligncenter" data-animation="animated fadeInUp normal">
									<p>In our company we have assembled only certified and experiences employees<br>
									who stand behind their promise to deliver quality services</p>
								</div>
								<div class="sc_blogger layout_portfolio_4 template_portfolio sc_blogger_horizontal no_description aligncenter" data-animation="animated fadeInUp normal">
									<div class="isotope_wrap inited" data-columns="4">
										<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_4 isotope_column_4 isotope_item_show">
											<div class="post_item post_item_portfolio post_item_portfolio_4 post_format_image">
												<div class="post_content isotope_item_content ih-item colored square effect13 left_to_right">
													<div class="post_featured img">
														<a href="#" title="">
															<img alt="Сertificate 1" src="images/250x201.png">
														</a>
													</div>
													<div class="post_info_wrap info">
														<div class="info-back">
															<h4 class="post_title">
															<a href="#" title="Сertificate 1">Сertificate 1</a>
															</h4>
															<div class="post_descr">
																<p>
																	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
																</p>
																<a href="#" title="
																	">
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_4 isotope_column_4 isotope_item_show">
											<div class="post_item post_item_portfolio post_item_portfolio_4 post_format_image">
												<div class="post_content isotope_item_content ih-item colored square effect13 left_to_right">
													<div class="post_featured img">
														<a href="#" title="">
															<img alt="Сertificate 2" src="images/250x201.png">
														</a>
													</div>
													<div class="post_info_wrap info">
														<div class="info-back">
															<h4 class="post_title">
															<a href="#" title="Сertificate 2">Сertificate 2</a>
															</h4>
															<div class="post_descr">
																<p>
																	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
																</p>
																<a href="#" title=""> </a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_4 isotope_column_4 isotope_item_show">
											<div class="post_item post_item_portfolio post_item_portfolio_4 post_format_image">
												<div class="post_content isotope_item_content ih-item colored square effect13 left_to_right">
													<div class="post_featured img">
														<a href="#" title="">
															<img alt="Сertificate 3" src="images/250x201.png">
														</a>
													</div>
													<div class="post_info_wrap info">
														<div class="info-back">
															<h4 class="post_title">
															<a href="#" title="Сertificate 3">Сertificate 3</a>
															</h4>
															<div class="post_descr">
																<p>
																	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
																</p>
																<a href="#" title="
																	">
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="isotope_item isotope_item_portfolio isotope_item_portfolio_4 isotope_column_4 isotope_item_show">
											<div class="post_item post_item_portfolio post_item_portfolio_4 post_format_image last">
												<div class="post_content isotope_item_content ih-item colored square effect13 left_to_right">
													<div class="post_featured img">
														<a href="#" title="">
															<img alt="Сertificate 4" src="images/250x201.png">
														</a>
													</div>
													<div class="post_info_wrap info">
														<div class="info-back">
															<h4 class="post_title">
															<a href="#" title="Сertificate 4">Сertificate 4</a>
															</h4>
															<div class="post_descr">
																<p>
																	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
																</p>
																<a href="#" title="
																	">
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="aligncenter margin_top_small">
									<a href="#" data-animation="animated fadeInUp normal" class="sc_button button-hover sc_button_square sc_button_style_blue sc_button_bg_custom sc_button_size_mini sc_button_iconed" data-text="Contact Us" title="Contact Us">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="">
					<div class="container">
						<div class="row">
							<h2 class="sc_title sc_align_center fig_border text-center">Our Advisors</h2>
							<div class="sc_undertitle margin_top_small margin_bottom_middle aligncenter">There are lots of reasons why people need advice from a financial adviser but there are also lots of<br/> different types of adviser, so it pays to know who to go to and when</div>
							<div class="content_wrap">
								<div class="sc_team sc_team_style_1">
									<div class="columns_wrap">
										<div class="column-1_3">
											<div class="sc_team_item sc_team_item_1">
												<div class="sc_team_item_avatar">
													<img alt="370x290.png" src="images/370x290.png">
												</div>
												<div class="sc_team_item_info">
													<h4 class="sc_team_item_title">
													<a href="#" title="Terri Roberts">Terri Roberts</a>
													</h4>
													<div class="sc_team_item_position">Tax Advisor</div>
													<div class="sc_team_item_description">2000 London School of Economics and Political Science;
														2004 Presidential Professor, University of Utah
													</div>
													<div class="sc_socials sc_socials_size_small">
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_tumblr icons" title="">
																<span class="icon-tumblr">
																</span>
																<span class="sc_socials_hover icon-tumblr">
																</span>
															</a>
														</div>
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_facebook icons" title="">
																<span class="icon-facebook">
																</span>
																<span class="sc_socials_hover icon-facebook">
																</span>
															</a>
														</div>
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_skype icons" title="">
																<span class="icon-skype">
																</span>
																<span class="sc_socials_hover icon-skype">
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div><div class="column-1_3">
											<div class="sc_team_item sc_team_item_2">
												<div class="sc_team_item_avatar">
													<img alt="dwayne.jpg" src="images/370x290.png">
												</div>
												<div class="sc_team_item_info">
													<h4 class="sc_team_item_title">
													<a href="#" title="Dwayne Lawson">Dwayne Lawson</a>
													</h4>
													<div class="sc_team_item_position">Tax Advisor</div>
													<div class="sc_team_item_description">2002 The University of New South Wales;
														2005 University of California, Berkeley, PhD in Finance
													</div>
													<div class="sc_socials sc_socials_size_small">
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_tumblr icons" title="">
																<span class="icon-tumblr">
																</span>
																<span class="sc_socials_hover icon-tumblr">
																</span>
															</a>
														</div>
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_gplus icons" title="">
																<span class="icon-gplus">
																</span>
																<span class="sc_socials_hover icon-gplus">
																</span>
															</a>
														</div>
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_skype icons" title="">
																<span class="icon-skype">
																</span>
																<span class="sc_socials_hover icon-skype">
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div><div class="column-1_3">
											<div class="sc_team_item sc_team_item_3">
												<div class="sc_team_item_avatar">
													<img alt="team_bobby.jpg" src="images/370x290.png">
												</div>
												<div class="sc_team_item_info">
													<h4 class="sc_team_item_title">
													<a href="#" title="Bobby Walters">Bobby Walters</a>
													</h4>
													<div class="sc_team_item_position">Tax Advisor</div>
													<div class="sc_team_item_description">2006 Copenhagen Business School, Finance Dpt.;
													2008 Professor at Swiss Federal Institute of Technology</div>
													<div class="sc_socials sc_socials_size_small">
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_facebook icons" title="">
																<span class="icon-facebook">
																</span>
																<span class="sc_socials_hover icon-facebook">
																</span>
															</a>
														</div>
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_gplus icons" title="">
																<span class="icon-gplus">
																</span>
																<span class="sc_socials_hover icon-gplus">
																</span>
															</a>
														</div>
														<div class="sc_socials_item">
															<a href="#" target="_blank" class="social_icons social_skype icons" title="">
																<span class="icon-skype">
																</span>
																<span class="sc_socials_hover icon-skype">
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>

<?php
/* I am using get template part function to load my footer file */ 
	get_template_part('template_files/footer');
 ?>