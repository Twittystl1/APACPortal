<?php get_header(); ?>
<div id="primary" class="content-area">
	<div id="content" class="site-content row-fluid" role="main">
		<div class="span3">
			<div class="box">
				<div class="content">
					<img src="<?=get_stylesheet_directory_uri()?>/images/manufacturing/logo.png" />
				</div>
			</div>
			<div class="box">
				<header>Contact Information
				</header>
				<div class="content">
					<?query_posts('category_name=contact-information&posts_per_page=1')?>
					<?the_post()?>
					<a href="<?the_permalink()?>"><h4><?the_title()?></h4></a>
					<summary><?the_content()?></summary></a>
				</div>
			</div>
			<div class="box">
				<header>APAC Plants
					<span class="more-link"><a href="/category/departments/manufacturing/apac-plants/">More</a></span>
				</header>
				<div class="content">
					<?=apacportal_post_list('apac-plants');?>
				</div>
			</div>
			<div class="box">
				<header>Training</header>
				<div class="content">
					<?=apacportal_post_list('training');?>
				</div>
			</div>
		</div>
		<div class="span6">
			<div class="box">
				<header>Manufacturing News
					<span class="more-link"><a href="/category/departments/manufacturing/manufacturing-news/">More</a></span>
				</header>
				<div class="content">
					<ul>
						<?=apacportal_post_list('manufacturing-news');?>
					</ul>
				</div>
			</div>
			<div class="box">
				<header>Manufacturing Team
					<span class="more-link"><a href="/category/departments/manufacturing/manufacturing-team/">More</a></span>
				</header>
				<div class="content">
					<?=apacportal_post_list('manufacturing-team');?>
				</div>
			</div>
			<div class="box">
				<header>World Class Manufacturing
					<span class="more-link"><a href="/category/departments/manufacturing/world-class-manufacturing/">More</a></span>
				</header>
				<div class="content">
					<?=apacportal_post_list('world-class-manufacturing');?>
				</div>
			</div>
		</div>
		<div class="span3 col-right">
			<div class="box">
				<header>Environmental Health & Safety
					<span class="more-link"><a href="/category/departments/manufacturing/environmental-health-safety/">More</a></span>
				</header>
				<div class="content">
					<?=apacportal_post_list('environmental-health-safety');?>
				</div>
			</div>
			<div class="box">
				<header>Manufacturing Engineering Vehicle
					<span class="more-link"><a href="/category/departments/manufacturing/manufacturing-engineering-vehecle/">More</a></span>
				</header>
				<div class="content">
					<?=apacportal_post_list('manufacturing-engineering-vehecle');?>
				</div>
			</div>
			<div class="box">
				<header>Manufacturing Engineering Powertrain
					<span class="more-link"><a href="/category/departments/manufacturing/manufacturing-engineering-powertrain/">More</a></span>
				</header>
				<div class="content">
					<?=apacportal_post_list('manufacturing-engineering-powertrain');?>
				</div>
			</div>
			<div class="box">
				<header>Manufacturing Planning & Control
					<span class="more-link"><a href="/category/departments/manufacturing/manufacturing-planning-control/">More</a></span>
				</header>
				<div class="content">
					<?=apacportal_post_list('manufacturing-planning-control');?>
				</div>
			</div>
		</div>
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>