<!DOCTYPE html>

<html lang="en-US">



<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/images/logo.ico" />

    <title>Initial Cargo Handling</title>



	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.3.1" type="text/css" media="all" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&#038;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&#038;subset=latin" type="text/css" media="all" />

	<link rel="stylesheet" href="<?= base_url()?>assets/css/fontello/css/fontello.css"/>

	<link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome-4.7.0/css/font-awesome.css"/>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" /> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
    <link rel="stylesheet" href="<?= base_url()?>assets/js/rs-plugin/settings.css" type="text/css" media="all" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <link rel="stylesheet" href="<?= base_url()?>assets/css/woocommerce/woocommerce-layout.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/css/woocommerce/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />

    <link rel="stylesheet" href="<?= base_url()?>assets/css/woocommerce/woocommerce.css" type="text/css" media="all" />



    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/css/shortcodes.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/css/core.animation.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/css/tribe-style.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/css/skins/skin.css" type="text/css" media="all" />



	<link rel="stylesheet" href="<?= base_url()?>assets/css/core.portfolio.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/js/mediaelement/mediaelementplayer.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/js/mediaelement/wp-mediaelement.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="all" />	

    <link rel="stylesheet" href="<?= base_url()?>assets/js/core.customizer/front.customizer.css" type="text/css" media="all" />

	<link rel="stylesheet" href="<?= base_url()?>assets/js/core.messages/core.messages.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/js/swiper/idangerous.swiper.min.css" type="text/css" media="all" />

	<link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/css/skins/skin-responsive.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url()?>assets/css/slider-style.css" type="text/css" media="all" />

	<link rel="stylesheet" href="<?= base_url()?>assets/css/custom-style.css" type="text/css" media="all" />
<style>
.diagonal{
    height:100px;
    width:100px;
    position:relative;
 }

.diagonal:after{
    content:"";
    position:absolute;
    border-top:2px solid black;
    width:120%;
    margin-left:140px;
    transform: rotate(130deg);
    transform-origin: 0% 0%;
    top:10px;
}
.diagonal2{
    /* height:100px; */
    width:100px;
    position:relative;
 }

.diagonal2:after{
    content:"";
    position:absolute;
    border-top:2px solid black;
    width:118%;
    margin-left:215px;
    transform: rotate(-130deg);
    transform-origin: 0% 0%;
    top:0px;
}
.diagonal3{
    height:100px;
    width:100px;
    position:relative;
 }

.diagonal3:after{
    content:"";
    position:absolute;
    border-top:2px solid black;
    width:118%;
    margin-left:240px;
    transform: rotate(90deg);
    transform-origin: 0% 0%;
    top:0px;
}
.diagonal4{
    height:100px;
    width:100px;
    position:relative;
 }

.diagonal4:after{
    content:"";
    position:absolute;
    border-top:2px solid black;
    width:118%;
    margin-left:140px;
    transform: rotate(90deg);
    transform-origin: 0% 0%;
    top:0px;
}
</style>
</head>



<body class="page body_style_wide body_filled article_style_boxed layout_courses_3 template_portfolio top_panel_style_light top_panel_opacity_solid top_panel_above menu_right sidebar_hide">

    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>

	<!-- Body -->

    <div class="body_wrap">

        <div class="page_wrap">

            <div class="top_panel_fixed_wrap"></div>

            <header class="top_panel_wrap bg_tint_light">

				<!-- User menu -->

                <!-- <div class="menu_user_wrap">

                    <div class="content_wrap clearfix">

                        <div class="menu_user_area menu_user_right menu_user_nav_area">

                            <ul id="menu_user" class="menu_user_nav">

                                <li class="menu_user_controls">

									<a href="<?= base_url()?>assets/#" class="icon icon-logout">Sign In</a>

								</li>

                            </ul>

                        </div>

                        
                    </div>

                </div> -->

				<!-- /User menu -->

				<!-- Main menu -->

                <div class="menu_main_wrap logo_left">					

                    <div class="content_wrap clearfix">

						<!-- Logo -->

                        <div class="logo">

                            <a href="<?= base_url()?>">

								<img src="<?= base_url() ?>/assets/images/logo.png" class="logo_main" alt="">

								<img src="<?= base_url() ?>/assets/images/logo.png" class="logo_fixed" alt="">

							</a>

                        </div>

						<!-- Logo -->

						<!-- Search -->

                        <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">

                            <a href="<?= base_url()?>" class="search_icon icon-search-2"></a>

                            <div class="search_form_wrap">

                                <form method="get" class="search_form" action="#">

                                    <button type="submit" class="search_submit icon-zoom-1" title="Start search"></button>

                                    <input type="text" class="search_field" placeholder="" value="" name="s" title="" />

                                </form>

                            </div>

                            <div class="search_results widget_area bg_tint_light">

                                <a class="search_results_close icon-delete-2"></a>

                                <div class="search_results_content">

							</div>

                            </div>

                        </div>

						<!-- /Search -->

						<!-- Navigation -->

                        <a href="<?= base_url()?>" class="menu_main_responsive_button icon-menu-1"></a>

						<nav class="menu_main_nav_area">

							<ul id="menu_main" class="menu_main_nav">

                                <li class="menu-item  "><a href="<?= base_url()?>">Produk</a></li>

                                <li class="menu-item"><a href="<?= base_url()?>">Promembed</a></li>

                                <li class="menu-item"><a href="<?= base_url('about')?>">About Us</a></li>

                                <li class="menu-item"><a href="<?= base_url('contact')?>">Contact Us</a></li>
                                <li class="menu-item current-menu-item page_item current_page_item" style="background-color: #302b63;"><a  target="_blank" href="https://srv151.niagahoster.com:2096">Login</a></li>

								<!-- <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent"><a href="<?= base_url()?>assets/index.html">Homepage</a>

									<ul class="sub-menu">

										<li class="menu-item current-menu-item page_item current_page_item"><a href="<?= base_url()?>assets/index.html">Homepage Wide</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/homepage-2.html">Homepage Boxed</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/homepage-3.html">Homepage Photos</a></li>

									</ul>

								</li>

								<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/#">Features</a>

									<ul class="sub-menu">

										<li class="menu-item"><a href="<?= base_url()?>assets/typography.html">Typography</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/shortcodes.html">Shortcodes</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/video-tutorials.html">Video Tutorials</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/events.html">Events Calendar</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/about-us.html">About Us</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/contact-us.html">Contact Us</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/not-existing-page.html">Page 404</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/not-existing-page-2.html">Page 404 (Style 2)</a></li>

									</ul>

								</li>

								<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/courses-streampage.html">Courses</a>

									<ul class="sub-menu">

										<li class="menu-item"><a href="<?= base_url()?>assets/courses-streampage.html">All courses</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/free-course.html">Free course</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/paid-course.html">Paid course</a></li>

										<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/#">Lessons</a>

											<ul class="sub-menu">

												<li class="menu-item"><a href="<?= base_url()?>assets/free-lesson.html">Free lesson (started)</a></li>

												<li class="menu-item"><a href="<?= base_url()?>assets/free-lesson-coming-soon.html">Free lesson (coming soon)</a></li>

												<li class="menu-item"><a href="<?= base_url()?>assets/lesson-from-paid-course.html">Lesson from paid course</a></li>

											</ul>

										</li>

									</ul>

								</li>

								<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/team-members.html">Teachers</a>

									<ul class="sub-menu">

										<li class="menu-item"><a href="<?= base_url()?>assets/team-members.html">Teachers Team</a></li>

										<li class="menu-item"><a href="<?= base_url()?>assets/personal-page.html">Teacher&#8217;s Personal Page</a></li>

									</ul>

								</li>

								<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/blog-streampage.html">Blog</a>

									<ul class="sub-menu">

										<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/#">Post Formats</a>

											<ul class="sub-menu">

												<li class="menu-item"><a href="<?= base_url()?>assets/post-formats-with-sidebar.html">With Sidebar</a></li>

												<li class="menu-item"><a href="<?= base_url()?>assets/post-formats.html">Without sidebar</a></li>

											</ul>

										</li>

										<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/#">Masonry tiles</a>

											<ul class="sub-menu">

												<li class="menu-item"><a href="<?= base_url()?>assets/masonry-2-columns.html">Masonry (2 columns)</a></li>

												<li class="menu-item"><a href="<?= base_url()?>assets/masonry-3-columns.html">Masonry (3 columns)</a></li>

											</ul>

										</li>

										<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/#">Portfolio tiles</a>

											<ul class="sub-menu">

												<li class="menu-item"><a href="<?= base_url()?>assets/portfolio-2-columns.html">Portfolio (2 columns)</a></li>

												<li class="menu-item"><a href="<?= base_url()?>assets/portfolio-3-columns.html">Portfolio (3 columns)</a></li>

												<li class="menu-item menu-item-has-children"><a href="<?= base_url()?>assets/#">Portfolio hovers</a>

													<ul class="sub-menu">

														<li class="menu-item"><a href="<?= base_url()?>assets/portfolio-hovers-circle.html">Circle, Part 1</a></li>

														<li class="menu-item"><a href="<?= base_url()?>assets/portfolio-hovers-circle-part-2.html">Circle, Part 2</a></li>

														<li class="menu-item"><a href="<?= base_url()?>assets/portfolio-hovers-circle-part-3.html">Circle, Part 3</a></li>

														<li class="menu-item"><a href="<?= base_url()?>assets/portfolio-hovers-square.html">Square, Part 1</a></li>

														<li class="menu-item"><a href="<?= base_url()?>assets/portfolio-hovers-square-part-2.html">Square, Part 2</a></li>

														<li class="menu-item"><a href="<?= base_url()?>assets/portfolio-hovers-square-part-3.html">Square, Part 3</a></li>

													</ul>

												</li>

											</ul>

										</li>

									</ul>

								</li> -->

								<!-- <li class="menu-item"><a href="<?= base_url()?>assets/products.html">Shop</a></li> -->

							</ul>

						</nav>

						<!-- /Navigation -->

                    </div>

                </div>

				<!-- /Main menu -->

            </header>