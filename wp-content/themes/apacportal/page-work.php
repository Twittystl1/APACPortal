<?php get_header(); ?>
<style>
.site-header {
	background-image: url('<?=get_stylesheet_directory_uri()?>/images/admin/headerbg.jpg');
	background-position: center -20px;
}
</style>
	<div id="primary" class="content-area">
		<div id="content" class="site-content row-fluid" role="main">
			<div class="span3">
				<div class="box" style="margin-bottom: 0;">
					<div class="content">
						<img src="<?=get_stylesheet_directory_uri()?>/images/admin/logo.png" width="150px">
						<p style="font-weight: bold; font-size: 1.3em;">Facilities & Administration</p>
					</div>
				</div>
				<div class="box">
					<header>Mission
					</header>
					<div class="content">
						Maintain a Healthy Working Environment
					</div>
				</div>
				<div class="box">
					<header>Work Place
					</header>
					<div class="content">
						<ul>
							<li><a href="#">Shanghai Dawning center office</a></li>
							<li><a href="#">Shanghai Zizhu office</a></li>
							<li><a href="#">Shanghai Jiading office</a></li>
							<li><a href="#">Beijing R&F center office</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="span3">
				<div class="box">
					<header>Facility News
						<span class="more-link"><a href="/category/departments/ict/">More</a></span>
					</header>
					<div class="content">
						<ul>
							<li><a href="#">Facility notice</a></li>
							<li><a href="#">Office move or expansion project introduction</a></li>
							<li><a href="#">New service introduction</a></li>
							<li><a href="#">Facility Team introduction</a></li>
						</ul>
					</div>
				</div>
				<div class="box">
					<header>Travel Service</header>
					<div class="content">
						<ul>
							<li><a href="#">Travel agency introduction – hotline, service scope</a></li>
							<li><a href="#">China Corporate Hotel List </a></li>
							<li><a href="#">Travel Destination Alert </a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="span3">
				<div class="box">
					<header>Policies</header>
					<div class="content">
						<ul>
							<li><a href="/wp-content/uploads/2013/09/Invitation-Letter-for-Ennio.pdf">Office Regulations</a></li>
							<li><a href="#">Facility Security Policy (access card management etc)</a></li>
							<li><a href="#">EHS policy</a></li>
							<li><a href="#">Emergency Response Policy by site</a></li>
						</ul>
					</div>
				</div>
				<div class="box">
					<header>Vehicle Service
						<span class="more-link">More</span>
					</header>
					<div class="content">
						<ul>
							<li><a href="#">Pool car shuttle service schedule</a></li>
							<li><a href="#">Tips for vehicle maintenance</a></li>
						</ul>
					</div>
				</div>
				<div class="box">
					<header>How To
						<span class="more-link">More</span>
					</header>
					<div class="content">
						<ul>
							<li><a href="#">Apply for business card</a></li>
							<li><a href="#">Request for employee badge</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="span3 col-right">
				<?get_sidebar('department-list')?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>