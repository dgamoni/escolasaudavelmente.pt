 <?php get_header(); ?>

        <div class="container page-wrap">
	        <div class="row">
	        	<div class="col-md-1">
	        	</div>
	        	<div class="col-md-3 mobileoff">
	        		<?php 
	        			// fix v3 
						$productcategories = wp_get_object_terms($post->ID, 'page_category');
						$term_id = $productcategories[0]->term_id;
						$enable_custom_left_sidebar_menu = get_field('enable_custom_left_sidebar_menu', 'page_category' . '_' . $term_id);

	        			if($enable_custom_left_sidebar_menu) {
	        				
	        				$custom_left_sidebar = get_field('custom_left_sidebar', 'page_category' . '_' . $term_id);
		        			$instance_ = array('title' => '' ,'function' => $custom_left_sidebar->name );
		        			$widget_id = "netgo_navigation-".$custom_left_sidebar->ID;
		        			$argg = array(
		        				'name'  => "Left sidebar",
		        				'id'	=> "left-sidebar",
		        				'description' => "Left sidebar",
		        				'class'		=> "",
		        				'before_widget'=> "",
		        				'after_widget'=> "",
		        				'after_title'=> "",
		        				'widget_id' => $widget_id,
		        				'widget_name' => "Netgo Expandable/Collapsible Menu"
		        			);

		        			$nav = new Netgo_Navigation();
		        			$nav->widget($argg, $instance_);
		        		} else { 
		        			get_sidebar('left');
		        		}
		        		// end fix
	        		 ?>
	        		<?php //get_sidebar('left'); ?>
	        	</div>
	        	<div class="col-md-7 page-content">
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
		            		<a href="<?php echo get_permalink( $prev_post_id ); ?>">
		            			<button type="button" class="btn btn-secondary w-100">anterior</button>
		            		</a>
		            	</div>
		            	<div class="col-xs-6">
		            		<a href="<?php echo get_permalink( $next_post_id ); ?>">
		            			<button type="button" class="btn btn-secondary w-100">próximo</button>
		            		</a>
		            	</div>
		            </div>



		        </div>
		        <div class="col-md-1">
	        	</div>
	        </div>
        </div>

<?php get_footer(); ?>