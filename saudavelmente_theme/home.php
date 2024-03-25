<?php get_header(); ?>

        <div class="container page-wrap">
          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10 page-content">
                <?php while (have_posts()): the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                <?php endwhile; ?>
                <?php 
		            $adjacent_post = get_adjacent_post( false, '', true );
		            $prev_post_id  = $adjacent_post->ID;
		            $adjacent_post = get_adjacent_post( false, '', false );
		            $next_post_id  = $adjacent_post->ID;
                ?>

                <div class="row button-wrap">
                  <div class="col-xs-6">
					<?php echo get_previous_posts_link_(); ?>
                  </div>
                  <div class="col-xs-6">
                    <?php echo get_next_posts_link_(); ?>
                  </div>
                </div>

            </div>
            <div class="col-md-1">
            </div>
          </div> <!-- end row -->
        </div>

<?php get_footer(); ?>  