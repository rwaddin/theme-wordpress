<?php get_header() ?>

<?php

// if ( is_page('resume') ) {
// echo  "resume page";
// } else {
// 	echo "page" . is_page();
//   }
?>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php
        global $post;
        $slug = $post->post_name;
        if (in_array($slug, ["about","project","resume","blog","contact"])) {
            get_template_part( 'template-parts/content', $slug);
        }else{
            get_template_part( 'template-parts/content', "404");
        }
        ?>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>