<?php if ( have_comments() ) : ?>
	<h4>
		<?php
		printf(_n( 'Один коментар', '%1$s Коменатарі', get_comments_number() ), number_format_i18n( get_comments_number()));
		?>
	</h4>
<?php else: ?>
	<h4>Немає коментарів</h4>
<?php endif; ?>
<?php foreach ($comments as $comment) { ?>
<div class="row">
	<div class="col-xs-12">
		<div class="media comment-<?php comment_ID(); ?>">
			<div class = "media-left">
				<a href="<?php comment_author_url(); ?>">
					<?php echo get_avatar( $comment->comment_author_email, $size = '40');?>
				</a>
			</div>
			<div class="media-body">
				<span class="comment-author"><a href="<?php comment_author_url(); ?>">
					<?php comment_author(); ?>
				</a></span>
				<span class="comment-date">on <?php comment_date(); ?></span>
				<p><?php echo $comment->comment_content; ?></p>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php if ( !comments_open() ) : ?>
	<h4>Коментарі закриті до цієї статті</h4>
<?php else: ?>
<?php endif; ?>

<div class="row">
	<div class="col-xs-12">
		<h4>Залиште коментар</h4>
		<a name="comments"></a>
		<form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method = "post" id="commentform">
		<input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID'/>
		<div class="form-group">
			<label>Ім'я</label>
			<input type="text" name="author" class="form-control" onfocus="if(this.value == this.defaultValue) this.value = ''">
		</div>	
		<div class="form-group">
			<label>E-mail (обов'язково, не буде показано)</label>
			<input type="text" name="email" class="form-control" onfocus="if (this.value == this.defaultValue) this.value = ''">
		</div>
		<div class="form-group">
			<label>Вебсайт (не обов'язково)</label>
			<input type="text" value="" name="url" class="form-control">
		</div>
		<div class="form-group">
			<textarea rows="7" cols="60"
			name="comment" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Додати ваш коментар">
		</div>
		</form>
	</div>
</div>