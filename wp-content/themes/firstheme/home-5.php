<?php /* Template Name: Home Five*/ ?>
<?php get_header(); ?>

        <?php if ( is_active_sidebar('Extra One', 'Extra Two', 'Extra Three', 'Extra Four') ) : ?>
			<aside id="extras" class="row-fluid">
        		<?php dynamic_sidebar('Extra One'); ?>
				<?php dynamic_sidebar('Extra Two'); ?>
				<?php dynamic_sidebar('Extra Three'); ?>
				<?php dynamic_sidebar('Extra Four'); ?>
			</aside>
        <?php endif; ?>


<div class="container">
<?php get_sidebar('left'); ?>
   <? $meta_left = get_post_meta( $post->ID, 'left_sidebar', TRUE );$meta_right = get_post_meta( $post->ID, 'right_sidebar', TRUE );$left = str_replace('span', '', $meta_left);$right = str_replace('span', '', $meta_right);$add = $left + $right ;$left_right = 12 - $add;$leftorright = 12 - $add;?>
   <section id="content-wrapper" <?php if ( is_active_sidebar('Left Sidebar') && is_active_sidebar('Right Sidebar') ) { echo "class='span$left_right'" ;} elseif ( is_active_sidebar('Left Sidebar') || is_active_sidebar('Right Sidebar') ) {echo"class='span$leftorright'";} else 'class="span12"'; ?> >
		<div class="content">
			<?php if ( is_active_sidebar('Content Top') ) : ?>
                <aside id="content-top">
                    <?php dynamic_sidebar('Content Top'); ?>
                </aside>
            <?php endif; ?>




			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array( 'cat' => 25, 'posts_per_page' => 1, 'orderby' => 'rand', 'paged' => $paged );  query_posts($args); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                		<div class="row-fluid">
                            <div class="banner span12">
                            <div class="page-header"><h3 class="title">Reviews</h3></div>
                                <blockquote>
									<?php
                                        $review = get_post_meta($post->ID, 'id-review', true);
                                        $thispost = get_post( $review );
                                        $content = $thispost->post_content;
                                        echo $content;
                                    ?>
                                    <small>Someone famous <cite title="Source Title">
                                        <?
                                                $meta = get_post_meta( $post->ID, 'firstheme_subtitle_text', TRUE );
                                                echo $meta;
                                        ?>
                                    </cite></small>
                                </blockquote>
                            </div>
                        </div>
					</div>
            	<?php endwhile; ?>
            <?php endif; ?>
			



		<div class="page-header"><h3 class="title">Clients</h3></div>
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array( 'cat' => 27, 'orderby' => 'rand', 'posts_per_page' => 10, 'paged' => $paged );  query_posts($args); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
                        <div class="span2 client">
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="thumbnail">
                                    <a href="#"><?php 
                                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                          the_post_thumbnail();
                                        } 
                                    ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
		</div>


        

			<?php if ( is_active_sidebar('Content Bottom') ) : ?>
                <aside id="content-bottom">
                    <?php dynamic_sidebar('Content Bottom'); ?>
                </aside>
            <?php endif; ?>
		</div>
   </section>
<?php get_sidebar('right'); ?>

</div>
<?php get_footer(); ?>
