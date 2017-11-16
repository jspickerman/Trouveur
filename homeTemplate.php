<?php
/*
    Template Name: Home Page Template
    */

?>

<?php get_header(); ?>

	<div id="homePrimary" class="content-area">
		<main id="main" class="site-main" role="main" <?php hybrid_attr( 'content' ); ?>>
                    <h2 id="newsHeader">Latest News</h2>

                                             <?php if ( have_posts() ) : ?>
                                                      <?php while ( have_posts() ) : the_post(); ?>
                                                      <?php endwhile; ?>
                                    <?php endif; ?>
                                        
                                    <?php wp_reset_query(); ?>

                                    <!-- Start latest post -->

                                    <?php $latest_post = get_posts( 'numberposts=3' ); // Defaults args fetch posts starting with the most recent ?>
                                    <?php foreach( $latest_post as $post ) : setup_postdata( $post ); ?>

                                    <div class="post-container">
                                        <h3  class="post-title"><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>

                                    <?php endforeach; ?>
                                    <?php wp_reset_query(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
        <script>
           $=jQuery.noConflict(true);
            $(document).ready(function()
            {
                  $('nav').slideDown();  
            });
        </script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

