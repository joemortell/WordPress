<?php get_header(); ?>

	<header>
			<nav>
				<a class="work">Our Work</a>
				<a class="about">About</a>
				<a class="team">Team</a>
				<a class="contact">Contact</a>
				<a class="blog">Blog</a>
			</nav>
			<a href="http://www.twitter.com" alt="Rare Breed Twitter Page" class="twitter"></a>
			<a href="http://www.facebook.com" alt="Rare Breed Facebook Page" class="facebook"></a>
	</header>

	<section id="video" class="clearfix">
		<hgroup>
			<h1>A Creative<br/>
			Digital Agency</h1>
			<h2>Lorem ipsum is simply dummy text for the type…<h2>
			<a class="view">View our work</a>
		</hgroup>
		<video id="video_background" src="<?php bloginfo('template_directory'); ?>/img/video.mp4" autoplay loop muted />
	</section>
	

	<div id="content-wrapper">
	
	<div id="container">
	
	<section id="work" class="clearfix">
			<a href="" alt="">
				<div class="box grid_3">
					<div class="mini-wrapper">
					<img src="<?php bloginfo('template_directory'); ?>/img/app.png" alt="" />
						<div class="info">
							<h3>Title</h3>
							<p>Description of project</p>
						</div>
					</div>
				</div>
			</a>
			<a href="" alt="">
				<div class="box grid_3">
					<div class="mini-wrapper">
					<img src="<?php bloginfo('template_directory'); ?>/img/app.png" alt="" />
						<div class="info">
							<h3>Title</h3>
							<p>Description of project</p>
						</div>
					</div>
				</div>
			</a>
			<a href="" alt="">
				<div class="box grid_3">
					<div class="mini-wrapper">
					<img src="<?php bloginfo('template_directory'); ?>/img/app.png" alt="" />
						<div class="info">
							<h3>Title</h3>
							<p>Description of project</p>
						</div>
					</div>
				</div>
			</a>
			<a href="" alt="">
				<div class="box grid_3">
					<div class="mini-wrapper">
					<img src="<?php bloginfo('template_directory'); ?>/img/app.png" alt="" />
						<div class="info">
							<h3>Title</h3>
							<p>Description of project</p>
						</div>
					</div>
				</div>
			</a>
	</section>
	
	<section id="about" class="clearfix">
		<div class="row one">
			<div class="grid_6">
				<img src="<?php bloginfo('template_directory'); ?>/img/about-us.jpg" alt="About Us" />
			</div>
			<div class="grid_6 about">
				<h2>About Us</h2>
				<p>We are experts at turning ideas into real world projects. Whether it’s a branding or 
				marketing tool for your business or the next Angry Birds. We pride ourselves on offering 
				a personal service at a competitive price.</p>
			</div>
		</div>
		<div class="row two">
			<div class="grid_6 align-right process">
				<h2>Our Process</h2>
				<p>Once we have established a working solution for your app and agree on direction, 
				our design team will set to work and draw up wire frames of your iPhone app, and detail 
				all the functionality. We are firm believers that form follows function and we develop 
				and design our iPhone apps based on this principal.</p>
			</div>
			<div class="grid_6">
				<img src="<?php bloginfo('template_directory'); ?>/img/about-us.jpg" alt="About Us" />
			</div>
		</div>
	</section>
	
	<section id="team" class="clearfix">
	<h2>Who we are</h2>
			<a href="" alt="">
				<div class="box grid_3">
					<div class="mini-wrapper">
					<img src="<?php bloginfo('template_directory'); ?>/img/app.png" alt="" />
						<div class="info">
							<h3>Name</h3>
							<p>Job Description</p>
						</div>
					</div>
				</div>
			</a>
			<a href="" alt="">
				<div class="box grid_3">
					<div class="mini-wrapper">
					<img src="<?php bloginfo('template_directory'); ?>/img/app.png" alt="" />
						<div class="info">
							<h3>Name</h3>
							<p>Job Description</p>
						</div>
					</div>
				</div>
			</a>
			<a href="" alt="">
				<div class="box grid_3">
					<div class="mini-wrapper">
					<img src="<?php bloginfo('template_directory'); ?>/img/app.png" alt="" />
						<div class="info">
							<h3>Name</h3>
							<p>Job Description</p>
						</div>
					</div>
				</div>
			</a>
			<a href="" alt="">
				<div class="box grid_3">
					<div class="mini-wrapper">
					<img src="<?php bloginfo('template_directory'); ?>/img/app.png" alt="" />
						<div class="info">
							<h3>Name</h3>
							<p>Job Description</p>
						</div>
					</div>
				</div>
			</a>
	</section>
	
	<div id="bottom-wrapper">
	<section id="contact" class="clearfix">
	<h2>Contact</h2>
			<div class="grid_6 one">
				<h2>About Us</h2>
				<p>We are experts at turning ideas into real world projects. Whether it’s a branding or 
				marketing tool for your business or the next Angry Birds. We pride ourselves on offering 
				a personal service at a competitive price.</p>
			</div>
			<div class="grid_6">
				<h2>Our Process</h2>
				<p>Once we have established a working solution for your app and agree on direction, 
				our design team will set to work and draw up wire frames of your iPhone app, and detail 
				all the functionality. We are firm believers that form follows function and we develop 
				and design our iPhone apps based on this principal.</p>
			</div>
	</section>
	
		<footer>
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
			<ul>
				<li><a href="work">Our Work</a></li>
				<li><a href="about">About</a></li>
				<li><a href="team">Team</a></li>
				<li><a href="contact">Contact</a></li>
				<li><a href="blog">Blog</a></li>
			</ul>
		</footer>
	
	</div>
		
	<?php 	/*
			$id = array( 2, 1341);
			
			foreach ($id as $page_id) {
		    	$page_data = get_page( $page_id );
				echo $page_data->post_content;
			} */?>

<?php get_footer(); ?>