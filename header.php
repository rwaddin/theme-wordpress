<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title><?= the_title(); ?> &mdash; <?= $_SERVER['SERVER_NAME'] ?></title>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="app">
	<div class="main-wrapper main-wrapper-1">

		<div class="main-sidebar sidebar-style-2">
			<aside id="sidebar-wrapper">
				<div class="sidebar-brand">
					<a href="<?= site_url(); ?>"><?= get_bloginfo("name") ?></a>
				</div>
				<div class="sidebar-brand sidebar-brand-sm">
					<a href="<?= site_url(); ?>">AS</a>
				</div>
				<ul class="sidebar-menu">
					<li class="text-center">
                        <?php
                        $logo = get_template_directory_uri()."/assets/avatar.png";
                        if(function_exists('the_custom_logo')){
                            $customLogo = get_theme_mod("custom_logo");
                            $logo = wp_get_attachment_image_src($customLogo);
                        }
                        ?>
						<img src="<?= $logo[0] ?>" alt="" class="img-fluid rounded-circle w-50">
					</li>
					<li class="text-center px-4 mt-3" style="line-height: normal;">
						Hi,<br> My name is <span class="font-weight-bold"><?= get_bloginfo('description'); ?></span> and I'm a Full-Stack Web Developer. Welcome to my personal
						website!
					</li>
					<li class="text-center addin-social my-3">
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
						<a href="#"><i class="fab fa-github-alt"></i></a>
						<a href="#"><i class="fab fa-stack-overflow"></i></a>
						<a href="#"><i class="fab fa-codepen"></i></a>
					</li>
					 <!--<li class="menu-header">Dashboard</li>-->
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'primary', # type menu
                            'menu_id'   => "",
                            'container' => "",
                            "theme_location" => "primary",
                            'items_wrap' => '%3$s' # remove tag <ul>
                        ) ) ;
                    ?>
				</ul>

				<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
					<a href="<?= site_url("contact"); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
						<i class="far fa-paper-plane"></i> Hire Me
					</a>
				</div>
			</aside>
		</div>

		<!-- Main Content -->
		<div class="main-content pt-0">
			<section class="section">
				<div class="section-header text-white-all" style="background: #6777ef;">
					<h1><?= the_title(); ?></h1>
					<!-- <div class="section-header-breadcrumb">
					  <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
					  <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
					  <div class="breadcrumb-item">Breadcrumb</div>
					</div> -->
				</div>

				<div class="section-body">