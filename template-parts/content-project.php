<div class="row">
	<?php
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$params = [
		'post_type' => 'project',
		'orderby' => 'date',
		'order' => 'DESC',
		"posts_per_page"=> 6,
		"paged" => $paged,
	];
	$query = new WP_Query($params);
	if ($query->have_posts()):
		while ($query->have_posts()): $query->the_post();
			global $post;
			$authorid = $post->post_author;
			$author = get_the_author_meta("user_nicename", $authorid);
			?>
			<div class="col-sm-4">
				<div class="card">
					<?php echo get_the_post_thumbnail($id, 'thumbnail', array('class' => 'card-img-top')); ?>
					<div class="card-body">
						<h5 class="card-title text-truncate"><?= get_the_title() ?></h5>
						<p class="card-text"><?= wp_trim_words(get_the_content(), 10) ?></p>
						<div class="d-flex justify-content-end">
							<a class="float-right badge badge-warning text-white" href="<?php echo get_post_permalink($id) ?>">Read  more <i class="fas fa-arrow-circle-right"></i> </a>
						</div>
						
						<?php
						$getTags = get_the_tags($id);
						if ($getTags){
							$tags = array_map(function ($tag){
								return $tag->name;
							}, $getTags);
							$x = implode(",&nbsp;", $tags);
							echo '<i class="fa fa-tags"></i> '.$x;
						}
						?>
					</div>
					<div class="card-footer bg-whitesmoke">
						<div class="d-flex justify-content-between">
							<span><i class="fa fa-user-circle"></i> <?php echo $author ?></span>
							<span><i class="far fa-calendar"></i> <?php echo get_the_date() ?></span>
						</div>
					</div>
				</div>
			</div>
		<?php
		endwhile;
		echo the_posts_navigation();
	else:
		echo 'record not found';
	endif;
	?>
</div>

<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-between">
		<li class="page-item">
			<?php previous_posts_link('<span class="dashicons dashicons-arrow-left-alt"></span> Previous') ?>
		</li>
		<li class="page-item">
			<?php next_posts_link('Next <span class="dashicons dashicons-arrow-right-alt"></span>', $query->max_num_pages); ?>
		</li>
	</ul>
</nav>



