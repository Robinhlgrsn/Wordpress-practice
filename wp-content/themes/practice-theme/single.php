<?php get_header()?>

    <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                <?php while(have_posts()){
                  the_post();}?>
							<article>
								<img src="<?php the_post_thumbnail_url()?>" />
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_date() ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author_posts_link() ?> 
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(','); ?></a>
								</ul>
								<p><?php the_content();?></p>
							</article>
 
							<nav class="navigation pagination">
									<?php the_posts_pagination(); ?>
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

    <?php get_footer()?>