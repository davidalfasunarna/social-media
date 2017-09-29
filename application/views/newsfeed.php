<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url()."assets/";?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url()."assets/";?>css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url()."assets/";?>css/theme-startup.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url()."assets/";?>css/custom.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url()."assets/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()."assets/";?>css/font-roboto.css" rel="stylesheet" type="text/css">
		
		
		<!--Form Validator-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
		<!-- Ajax JS -->
		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
		<script src="<?= base_url('includes/js/ajax.js'); ?>"></script>
		<!--Main Js file-->
		<script src="<?= base_url('includes/js/main.js'); ?>"></script>
		
	</head>
	
	
    <body class="btn-rounded scroll-assist <?= $page_class ?>">	
	    <div class="nav-container">
            <a id="top"></a>
            <nav class="absolute transparent">             
                <div class="nav-bar">
					<div class="row">
                        <div class="col-sm-12 col-sm-offset-1x">
							<div class="module left">
								<a href="<?php echo base_url();?>">
									<img class="logo logo-light" alt="SocMate" src="<?php echo base_url()."assets/";?>img/logo-light.png" />
									<img class="logo logo-dark" alt="SocMate" src="<?php echo base_url()."assets/";?>img/logo-dark.png" />
								</a>
							</div>
							<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
								<i class="ti-menu"></i>
							</div>
							<div class="module-group right">
								
								<div class="module left">
									<ul class="menu">
										<li><a href="#">Home</a></li>
										<li><a href="#">Find Friends</a></li>
										
										<li><a href="#">Profile</a></li>
										
									</ul>
								</div>

								<div class="module widget-handle cart-widget-handle left">
									<div class="cart">
										<ul class="menu">
											<li><a href="<?=base_url('login/logout')?>">Logout</a></li>
										</ul>
									</div>
									
								</div>
							</div>
							<!--end of module group-->
						</div>
					</div>
				</div>
			</nav>
		</div>
<?php
	//echo link_tag('includes/css/newsfeed.css');
	?>
        <div class="main-container">
			<section class="image-bg bg-dark parallax overlay pt120 pb120">
                <div class="background-image-holder fadeIn" >
                    <img alt="Background Image" class="background-image" src="<?php echo base_url()."assets/"?>img/project-single-3.jpg" style="display: none;">
				</div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="uppercase mb8">What's in your mind?</h2>
                            <p class="lead mb40">Exprees your self</p>
							
							<div class="modal-container">
                                <a class="btn btn-lg btn-modal" href="#">
								<i class="ti-layout-menu-v"></i> Create A Story</a>
                                <div class="foundry_modal text-center">
                                    <h3 class="uppercase">What's in your mind?</h3>
                                    <p class="lead mb48">
                                        Stay update with your Friends.
										.
									</p>
                                    <form class="form-newsletter halves" >
                                        <input type="text" name="post" class="mb0  " placeholder="What's in your mind?" />
                                        <button type="submit" class="btn-white mb0">Post!</button>                                       
									</form>
								</div>
							</div>
                            <!--end modal-->
							
						</div>
					</div>
                    <!--end of row-->
				</div>
                <!--end of container-->
			</section>

            
            <section class="bg-secondary">
                <div class="container">
                    <div class="col-md-9">
                        <div class="row masonry-loader">
                            <div class="col-sm-12 text-center">
                                <div class="spinner"></div>
							</div>
						</div>
                        <div class="row masonry masonryFlyIn mb40">
                            
                            <!--end of snippet-->
                            <div class="col-sm-6 post-snippet masonry-item">
                                <a href="#">
                                    <blockquote>
                                        Here's a lovely quote post you can use to say something poignant or important.
                                        <span class="author">Important Person - September 21, 2015</span>
									</blockquote>
								</a>
							</div>
                            <!--end of snippet-->
						</div>
						
					</div>
                    <!--end of 9 col-->
                    <div class="col-md-3 hidden-sm">
                        <div class="widget">
                            <h6 class="title">Search Friends</h6>
                            <hr>
                            <form>
                                <input class="mb0" type="text" placeholder="Type Here" />
							</form>
						</div>
                        <!--end of widget-->
                        <div class="widget">
                            <h6 class="title">Bio</h6>
                            <hr>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem antium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
							</p>
						</div>
                        <!--end of widget-->
                        <div class="widget">
                            <h6 class="title">Menus</h6>
                            <hr>
                            <ul class="link-list">
                                <li>
                                    <a href="#">Profile</a>
								</li>
                                <li>
                                    <a href="#">Friend</a>
								</li>
                                <li>
                                    <a href="#">Logout</a>
								</li>
								
							</ul>
						</div>
                        <!--end of widget-->
                        <div class="widget">
                            <h6 class="title">Recent Posts</h6>
                            <hr>
                            <ul class="link-list recent-posts">
                                <li>
                                    <a href="#">A simple image post for starters</a>
                                    <span class="date">September 23, 2015</span>
								</li>
                                <li>
                                    <a href="#">An audio post for good measure</a>
                                    <span class="date">September 19, 2015</span>
								</li>
                                <li>
                                    <a href="#">A thoguhtful blockquote post on life</a>
                                    <span class="date">September 07, 2015</span>
								</li>
							</ul>
						</div>
						
                        <!--end of widget-->
					</div>
                    <!--end of sidebar-->
				</div>
                <!--end of container-->
			</section>
			
			
			
		    <footer class="footer-2 bg-dark pt0 pb40">
                <div class="container">
                    <div class="row">
                        <hr class="mt0 mb40" />
					</div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-4">
							
						</div>
                        <div class="col-sm-4 text-center">
                            <span class="fade-half">
                                © Copyright 2017  All Rights Reserved
							</span>
						</div>
						
					</div>
                    <!--end of row-->
				</div>
                <!--end of container-->
			</footer>
			<input type="hidden" id="cb_csrf_secured" value="<?= $this->security->get_csrf_hash() ?>">		
		</div>
		
		
		<script src="<?php echo base_url()."assets/";?>js/jquery.min.js"></script>
		<script src="<?php echo base_url()."assets/";?>js/masonry.min.js"></script>
        <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>	
        <script src="<?php echo base_url()."assets/";?>js/flexslider.min.js"></script>
        <script src="<?php echo base_url()."assets/";?>js/scripts.js"></script>			
	</body>
</html>		   