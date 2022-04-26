<?php get_header() ?>
<?php is_home(); ?>
<?php
echo the_ID() ."<br>";
echo get_post_type();
if(have_posts()){
	while(have_posts()) {
		the_post();
		get_template_part("template-parts/content","blog");
	}
}

if ( is_page('resume') ) {
echo  "resume page";
} else {
	echo "page" . is_page();
  }

?>
	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'padhang' ); ?></p>
			<?php get_search_form(); ?>


<?php get_footer(); ?>