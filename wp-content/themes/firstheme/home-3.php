<?php /* Template Name: Home Three*/ ?>
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



            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array( 'cat' => 35, 'posts_per_page' => 3, 'paged' => $paged );  query_posts($args); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('main-content'); ?>>
                		<div class="entry-content">
                        <div class="page-header">
                            <h3 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                        <h4 class="sub-title">
						<?
                        $meta = get_post_meta( $post->ID, 'firstheme_subtitle_text', TRUE );
						echo $meta;
						?>
                        </h4>
                        <?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  ?><div class="thumbnail">
							  <?
							  the_post_thumbnail();
							  ?></div><?
							}
						?>	
						<?php
                            $vimeo_id = get_post_meta( $post->ID, 'firstheme_video_id', TRUE );
                            $vimeo_width = get_post_meta( $post->ID, 'firstheme_video_width', TRUE );
                            $vimeo_height = get_post_meta( $post->ID, 'firstheme_video_height', TRUE );
                            $key = 'firstheme_video_id';
                            $themeta = get_post_meta($post->ID, $key, TRUE);
                            if($themeta != '') {
                            echo '<div class="vimeo"><iframe src="http://player.vimeo.com/video/';
                            echo $vimeo_id;
                            echo'?title=0&amp;byline=0&amp;portrait=0" width="';
                            echo $vimeo_width;
                            echo'" height="';
                            echo $vimeo_height;
                            echo'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
                        }
                        ?>					 
                        <?php
							$review = get_post_meta($post->ID, 'id-review', true);
							$thispost = get_post( $review );
							$content = $thispost->post_content;
							echo $content;
						?>
					</div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>




			
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array( 'cat' => 31, 'posts_per_page' => 3, 'paged' => $paged );  query_posts($args); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('main-content'); ?>>
                		<div class="entry-content">
                        <div class="page-header">
                            <h3 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                        <h4 class="sub-title">
						<?
                        $meta = get_post_meta( $post->ID, 'firstheme_subtitle_text', TRUE );
						echo $meta;
						?>
                        </h4>
                        <?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							  ?><div class="thumbnail">
							  <?
							  the_post_thumbnail();
							  ?></div><?
							}
						?>	
						<?php
                            $vimeo_id = get_post_meta( $post->ID, 'firstheme_video_id', TRUE );
                            $vimeo_width = get_post_meta( $post->ID, 'firstheme_video_width', TRUE );
                            $vimeo_height = get_post_meta( $post->ID, 'firstheme_video_height', TRUE );
                            $key = 'firstheme_video_id';
                            $themeta = get_post_meta($post->ID, $key, TRUE);
                            if($themeta != '') {
                            echo '<div class="vimeo"><iframe src="http://player.vimeo.com/video/';
                            echo $vimeo_id;
                            echo'?title=0&amp;byline=0&amp;portrait=0" width="';
                            echo $vimeo_width;
                            echo'" height="';
                            echo $vimeo_height;
                            echo'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
                        }
                        ?>					 
                        <?php
							$review = get_post_meta($post->ID, 'id-review', true);
							$thispost = get_post( $review );
							$content = $thispost->post_content;
							echo $content;
						?>
					</div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
       

        

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
