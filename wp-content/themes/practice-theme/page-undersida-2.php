
<?php get_header(); ?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
							<?php while(have_posts()){
								the_post();
							?>
							<h1><?php the_title();?> </h1>
							<p>
							<?php the_content(); ?>
							</p>
						</div>
							<?php } ?>
							<?php get_sidebar('left')?>
					
					</div>
				</div>
			</section>
		</main>

	<?php get_footer(); ?>

