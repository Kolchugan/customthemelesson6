<?get_header(); ?>
<div class="container">
	<div class="row">
<div class="col-md-8">
	<h1 class="page-header">
		<?php wp_title('', true); ?>
	</h1>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<h2>
				
			</h2>
			<p class="lead">
				by <?php the_author_link(); ?>
			</p>
			<p>
				<span class="glyphicon glyphicon-time"></span>&nbsp; Додано <?php the_time( get_option( 'date_format' ) ); ?>
				&nbsp; &nbsp;
				<span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;
				<?php the_category(', '); ?>
			</p>
			<hr>
			<img class="img-responsive" src="http://placehold.it/900x300" alt="">
			<hr>
			<?php the_content(); ?>
			<a class="btn btn-primary" onclick="history.back()">Повернутись назад</a>
			<hr>

		<?php endwhile; ?>
	<?php endif; ?>
	<?php comments_template( '', true); ?>
</div>
<?get_footer(); ?>
</div>
</div>


