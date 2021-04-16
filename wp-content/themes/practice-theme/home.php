<?php get_header()?>   <!-- hämtar header.php -->

    <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php wp_title(''); ?></h1>  <!-- sidan titel -->

                <?php while(have_posts()){ // wordpressloopen hämtar alla inlägg. 
                  the_post();?>

							<article>
								<img src="<?php the_post_thumbnail_url()?>" />
								<h2 class="title">
									<a href="<?php the_permalink();/* hämtar länk till inlägget */ ?>"><?php the_title(); ?></a>  <!-- hämtar inläggets titel -->
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_date(); ?>  <!-- skriver ut datum för inlägget -->
									</li>
									<li>
										<i class="fa fa-user"></i><?php the_author_posts_link() ?> <!-- Länkar och filtrerna till specifik författare -->
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href=""><?php the_category(','); ?></a>  <!-- skriver ut och länkar/filterar kategorier -->
								</ul>
								<p><?php the_excerpt();?></p> <!-- hämta ett kortare utdrag från inlägget. -->
							</article>
            <?php }; ?>
							<nav class="navigation pagination">
									<?php the_posts_pagination(); ?> <!-- Om det är för många antal inlägg för sidan så kan du gå till föregående/nästa här -->
							</nav>
						</div>

						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
							<?php dynamic_sidebar('mainsidebar') ?> <!-- hämtar widget sidebar -->
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

    <?php get_footer()?>  <!-- hämtar footer.php -->