<?php /* Template name: Radovi ucenika */ ?>

<?php get_header(); ?>

<div class="main">

    <h1>Radovi učenika</h1>

    <div class="radovi">

        <?php

        $args = array( 'category_name' => 'radovi' );

        $the_query = new WP_Query($args);

        if ( $the_query->have_posts() ) :

            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <a href="<?php echo get_permalink(); ?>">

                    <?php the_post_thumbnail(); ?>

                </a>

            <?php endwhile;

        else:
            _e( 'Sorry, nema objava u ovoj kategoriji.', 'textdomain');
        endif;

        wp_reset_postdata();

        ?>

    </div>
</div>

<?php get_footer(); ?>