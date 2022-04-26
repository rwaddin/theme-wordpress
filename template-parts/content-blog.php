<?php
// $args = array(
//   'post_type' => 'blog', // enter custom post type
//   'orderby' => 'date',
//   'order' => 'DESC',
// );

// $loop = new WP_Query( $args );
// if( $loop->have_posts() ):
// while( $loop->have_posts() ): $loop->the_post(); global $post;
//   echo '<div class="portfolio">';
//   echo '<h3>' . get_the_title() . '</h3>';
//   echo '<div class="portfolio-image">'. get_the_post_thumbnail( $id ).'</div>';
//   echo '<div class="portfolio-work">'. get_the_content().'</div>';

//   $authorid = $post->post_author;
//   $date = get_the_date();
//   $author = get_the_author_meta("user_nicename", $authorid);

//   echo "<br>";
//   echo "author : {$author} <br>";
//   echo  'date : '.$date;
//   echo '</div>';
// endwhile;
// endif;
?>

<div class="row">
    <?php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $params = [
        'post_type' => 'blog',
        'orderby' => 'date',
        'order' => 'DESC',
        "posts_per_page"=> 1,
        "paged" => $paged,
//        'cat'=>1
    ];
    $query = new WP_Query($params);
    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post();
            global $post;
            $authorid = $post->post_author;
            $author = get_the_author_meta("user_nicename", $authorid);
            ?>
            <div class="col-sm-3">
                <div class="card">
                    <?php echo get_the_post_thumbnail($id, 'thumbnail', array('class' => 'card-img-top')); ?>
                    <div class="card-body">
                        <h5 class="card-title text-truncate"><?= get_the_title() ?></h5>
                        <p class="card-text"><?= wp_trim_words(get_the_content(), 10) ?></p>
                        <div class="d-flex justify-content-end">
                            <a class="float-right badge badge-info text-white" href="<?php echo get_post_permalink($id) ?>">Read  more <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>

                        <?php
                        echo '<i class="fa fa-tags"></i>';
                        $tags = get_the_tags($id);
                        foreach ($tags as $tag) {
                            echo ' &nbsp;'.$tag->name.',&nbsp;';
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
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <?php previous_posts_link('Newest Posts') ?>
        </li>
        <li class="page-item">
            <?php next_posts_link('Older Entries', $query->max_num_pages); ?>
        </li>
    </ul>
</nav>



