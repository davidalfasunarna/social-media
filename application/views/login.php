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
							
															
								<div class="module widget-handle cart-widget-handle left">
									<div class="cart">
										<ul class="menu">
										<li><a>
										Login</a>
										</li></ul>
									</div>
									<div class="function">
										<div class="widget">
											<form action="<?php echo base_url('login/try_login'); ?>" method="post">
												<ul class="cart-overview">
													<li>
														<?php if ($this->session->flashdata('failed_login')): ?>
														
														<div class="alert alert-dismissible alert-warning">
															<button type="button" class="close" data-dismiss="alert">&times;</button>
															<?=$this->session->flashdata('failed_login');?>
														</div>
														<?php endif;?>
														<?php if ($this->session->flashdata('unactive_user')): ?>
														<div class="alert alert-dismissible alert-info">
															<button type="button" class="close" data-dismiss="alert">&times;</button>
															<?=$this->session->flashdata('unactive_user');?>
														</div>
														<?php endif;?>
														<p class="text-danger" id="login_errors"></p>
													</li>
													<li>
														<div class="description droplogintxt">
															<span class="product-title">Username</span>                                                  
															<input name="username" type="text"  />
														</div>                                           
													</li>
													<li>
														<div class="description droplogintxt">
															<span class="product-title">Password</span>
															<input name="password" type="password" />
														</div>                                         
													</li>													
												</ul>
												<hr>
												<input type="submit" class="btnx btn-sm btn-filledx" value="Login" />
											</form>
										</div>
										<!--end of widget-->
									</div>
								</div>
							</div>
							<!--end of module group-->
						</div>
					</div>
				</div>
			</nav>
		</div>
		
        <div class="main-container">
			<?php 
			// echo link_tag('includes/css/login.css'); 
			?>
			<section class="pt0 pb0">
                <div class="slider-all-controls image-slider controls-inside">
                    <ul class="slides">
						<?php if (!$this->session->flashdata('failed_login') && !($this->session->flashdata('unactive_user'))): ?> 
                        <li class="vid-bxg image-bg overlay pt120 pb0">							
							<div class="background-image-holder">
								<img alt="image" class="background-image" src="<?php echo base_url()."assets/";?>img/home23.jpg" />
							</div>

							<div class="container">
								<div class="row">
									<div class="col-md-7 col-sm-12">
										<h1>Find Your Social Mate
										<br />Get to Know Each Other</h1>
										<p class="lead mb48 mb-xs-32">
											A simple, stylish way to connect with people,
											<br /> built with love
										</p>									
									</div>

									<div class="col-md-4 content">									
										<div class="login_view card">
											<h4 class="text-center">Start a New Journey!</h4>
											<?php if ($this->session->flashdata('registered')): ?>
											<div class="alert alert-dismissible alert-success">
												<button type="button" class="close" data-dismiss="alert">&times;</button>
												<?=$this->session->flashdata('registered');?>
											</div>
											<?php endif;?>
											<div class="form-group">
												<?=form_open('register/do_it'); ?>													
														<?= form_input('fname', '', array('class'=>'form-control', 'placeholder'=>'First Name', 'data-validation'=>'required alphanumeric')); ?>
														<?= form_input('lname', '', array('class'=>'form-control', 'placeholder'=>'Last Name', 'data-validation'=>'required alphanumeric')); ?>
														<?= form_input('email', '', array('class'=>'form-control', 'placeholder'=>'Email', 'data-validation'=>'required email')); ?>
														<?= form_input('uname', '', array('class'=>'form-control', 'placeholder'=>'Username', 'data-validation'=>'required')); ?>
														<?= form_password('pass_confirmation', '', array('class'=>'form-control', 'placeholder'=>'Password', 'data-validation'=>'required')); ?>
														<?= form_password('pass', '', array('class'=>'form-control', 'placeholder'=>'Confirm Password', 'data-validation'=>'required confirmation')); ?>
														<button role="submit"  type="submit" class="">Sign Up</button>
													<?= form_close(); ?>
											</div>
										
										</div>
									</div>	
								</div>
								<!--end of row-->
							</div>
							<!--end of container-->	
							
						</li>
						<?php endif;?>
						
                        <li class="vid-bxg image-bg overlay pt120 pb310">
							<div class="background-image-holder">
								<img alt="image" class="background-image" src="<?php echo base_url()."assets/";?>img/home22.jpg" />
							</div>
							
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<h1>Maintain Your Relationship
										<br />Let's Keep in Touch</h1>
										<p class="lead mb48 mb-xs-32">
											Especially at intervals so as to remain up to date,
											<br /> spread the love
										</p>	
									</div>
									<div class="col-md-4 col-md-offset-1 col-sm-12 text-center">
										<div class="login_view card login-box">
											<h4 class="text-center">Keep in Touch</h4>
											<?php if ($this->session->flashdata('registered')): ?>
											<div class="alert alert-dismissible alert-success">
												<button type="button" class="close" data-dismiss="alert">&times;</button>
												<?=$this->session->flashdata('registered');?>
											</div>
											<?php endif;?>
											<?php if ($this->session->flashdata('failed_login')): ?>
											<div class="alert alert-dismissible alert-warning">
												<button type="button" class="close" data-dismiss="alert">&times;</button>
												<?=$this->session->flashdata('failed_login');?>
											</div>
											<?php endif;?>
											<?php if ($this->session->flashdata('unactive_user')): ?>
											<div class="alert alert-dismissible alert-info">
												<button type="button" class="close" data-dismiss="alert">&times;</button>
												<?=$this->session->flashdata('unactive_user');?>
											</div>
											<?php endif;?>
											<p class="text-danger" id="login_errors"></p>
											<form class="form-signin" action="<?php echo base_url('login/try_login'); ?>" method="post">
												<input type="text" class="form-control" name="username" placeholder="Username" />
												<div class="clearfix"></div>
												<input type="password" class="form-control" name="password" placeholder="Password" />
												<div class="clearfix"></div>
												<div class="divider"></div>
												<button class="" type="submit">Login</button>
											</form>			
										</div>		
									</div>
								</div>
								<!--end of row-->
							</div>
                            <!--end of container-->
						</li>
					</ul>
				</div>
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
        <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>	
        <script src="<?php echo base_url()."assets/";?>js/flexslider.min.js"></script>
        <script src="<?php echo base_url()."assets/";?>js/scripts.js"></script>			
	</body>
</html>