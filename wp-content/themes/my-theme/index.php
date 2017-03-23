<?get_header(); ?>
<!-- Page Content -->
<div class="container">
	<div class="row">
		<!-- Blog Entries Column -->
		<div class="col-md-8">
			<h1 class="page-header">
				<?php
				if(wp_title('', false)){
					wp_title('', true);
				} else { echo "Останні публікації";}
				?>
			</h1>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<!-- First Blog Post -->
					<h2>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<p class="lead">
						by <?php the_author_link(); ?>
					</p>
					<p><span class="glyphicon glyphicon-time"></span>&nbsp; Додано <?php the_time( get_option( 'date_format' ) ); ?>
						&nbsp; &nbsp;
						<span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;
						<?php the_category(', '); ?>
					</p>
					<hr>
					<img class="img-responsive" src="http://placehold.it/900x300" alt="">
					<hr>
					<?php the_excerpt(); ?>
					<a class="btn btn-primary" href="<?php the_permalink(); ?>">Читати Більше <span class="glyphicon glyphicon-chevron-right"></span></a>
					<hr>
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- Pager -->
			<?php if ( $wp_query -> max_num_pages > 1 ) : ?>
				<ul class="pager">
					<li class="previous"><?php next_posts_link('Попередні'); ?></li>
					<li class="next"><?php previous_posts_link('Новіші'); ?></li>
				</ul>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<?get_footer(); ?>
</div>
