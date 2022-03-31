<?php
$p = $_GET['p'] ?? "Home";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>About Me &mdash; <?= $_SERVER['SERVER_NAME'] ?></title>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="app">
	<div class="main-wrapper main-wrapper-1">

		<div class="main-sidebar sidebar-style-2">
			<aside id="sidebar-wrapper">
				<div class="sidebar-brand">
					<a href="index.html"><?= $_SERVER['SERVER_NAME'] ?></a>
				</div>
				<div class="sidebar-brand sidebar-brand-sm">
					<a href="index.html">St</a>
				</div>
				<ul class="sidebar-menu">
					<li class="text-center">
						<img src="http://localhost:88/addin/assets/images/avatar-1.png" alt=""
						     class="img-fluid rounded-circle w-50">
					</li>
					<li class="text-center px-4 mt-3" style="line-height: normal;">
						Hi,<br> My name is <span class="font-weight-bold"><?php bloginfo('name'); ?></span> and I'm a Full-Stack Web Developer. Welcome to my personal
						website!
					</li>
					<li class="text-center addin-social my-3">
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
						<a href="#"><i class="fab fa-github-alt"></i></a>
						<a href="#"><i class="fab fa-stack-overflow"></i></a>
						<a href="#"><i class="fab fa-codepen"></i></a>
					</li>
					<!-- <li class="menu-header">Dashboard</li> -->
					<li class=active>
						<a class="nav-link" href="?p=about-me"><i class="far fa-user"></i> <span>About Me</span></a>
					</li>
					<li>
						<a class="nav-link" href="?p=project"><i class="fas fa-chalkboard-teacher"></i>
							<span>Project</span></a>
					</li>
					<li>
						<a class="nav-link" href="?p=resume"><i class="fas fa-id-card"></i> <span>Resume</span></a>
					</li>

					<li>
						<a class="nav-link" href="?p=blog"><i class="fas fa-rss"></i> <span>Blog</span></a>
					</li>

					<li>
						<a class="nav-link" href="?p=contact"><i class="far fa-envelope"></i> <span>Contact</span></a>
					</li>
				</ul>

				<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
					<a href="?p=contact" class="btn btn-primary btn-lg btn-block btn-icon-split">
						<i class="far fa-paper-plane"></i> Hire Me
					</a>
				</div>
			</aside>
		</div>

		<!-- Main Content -->
		<div class="main-content pt-0">
			<section class="section">
				<div class="section-header text-white-all" style="background: #6777ef;">
					<h1><?php echo $p ?></h1>
					<!-- <div class="section-header-breadcrumb">
					  <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
					  <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
					  <div class="breadcrumb-item">Breadcrumb</div>
					</div> -->
				</div>

				<div class="section-body">

				</div>
			</section>
		</div>
		<footer class="main-footer">
			<div class="footer-right">
				Copyright &copy; 2022
				<div class="bullet"></div>
				Theme <a href="https://getstisla.com/">stisla</a>
			</div>
			<div class="footer-right">

			</div>
		</footer>
	</div>
</div>

<!-- General JS Scripts -->
<!--<script src="assets/jquery.min.js"></script>-->
<!--<script src="assets/core/js/tooltip.js"></script>-->
<!--<script src="assets/bootstrap/js/bootstrap.min.js"></script>-->
<!--<script src="assets/nicescroll/jquery.nicescroll.min.js"></script>-->
<!--<script src="assets/core/js/stisla.js"></script>-->


<!-- Template JS File -->
<!--<script src="assets/core/js/scripts.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>