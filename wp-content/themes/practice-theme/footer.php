<footer id="footer">
			<div class="container">
				<div class="row top">
						<?php dynamic_sidebar('footer'); ?> 
						<?php dynamic_sidebar('footerTwo'); ?>
						<?php dynamic_sidebar('footerthree')?>
				</div>
				<div class="row bottom">
						<?php dynamic_sidebar('copyright')?>
				</div>
			</div>
		</footer>

	</div>

<?php wp_footer(); ?> <!-- Laddar in scripts och annan information innan stängade body tagen. hämtar adminpanelen tillsammans med wp_head -->
</body>
</html>