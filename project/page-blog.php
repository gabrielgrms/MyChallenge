<?php
get_header();
// get_search_form();
// args
$args = array(
    'numberposts'	=> 0,
    'post_type'		=> 'curso'
);
// query
$the_query = new WP_Query( $args );
?>


<div class="container">
    <div class="row">
    <div class="col-md-8">
        <?php
            if( $the_query->have_posts() ):
                while ( $the_query->have_posts() ) : $the_query->the_post();
                    echo '<a href=' . get_permalink() . '>' . get_the_title() . '</a>';
                    the_content();
                    the_field('resumo');
                    echo '<hr>';
                endwhile;
            endif;?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

<?php get_footer(); ?>
