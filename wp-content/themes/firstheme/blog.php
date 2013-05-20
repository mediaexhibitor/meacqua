<?php

/*

Template Name: Blog

*/

?>

<?php get_header(); ?>



<div class="container"> 









        <?php if ( is_active_sidebar('Extra One', 'Extra Two', 'Extra Three', 'Extra Four') ) : ?>

			<aside id="extras" class="row-fluid">

        		<?php dynamic_sidebar('Extra One'); ?>

				<?php dynamic_sidebar('Extra Two'); ?>

				<?php dynamic_sidebar('Extra Three'); ?>

				<?php dynamic_sidebar('Extra Four'); ?>

			</aside>

        <?php endif; ?>







<div class="fluid-grid">

<div class="row-fluid">



<?php get_sidebar('left'); ?>









		<? $meta_left = get_post_meta( $post->ID, 'left_sidebar', TRUE );$meta_right = get_post_meta( $post->ID, 'right_sidebar', TRUE );$left = str_replace('span', '', $meta_left);$right = str_replace('span', '', $meta_right);$add = $left + $right ;$left_right = 12 - $add;$leftorright = 12 - $add;?>

        <section id="content-wrapper" <?php if ( is_active_sidebar('Left Sidebar') && is_active_sidebar('Right Sidebar') ) { echo "class='span$left_right'" ;} elseif ( is_active_sidebar('Left Sidebar') || is_active_sidebar('Right Sidebar') ) {echo"class='span$leftorright'";} else 'class="span12"'; ?> >

			<div class="content">

       

       

               

    

                <?php if ( is_active_sidebar('Content Top') ) : ?>

                

                    <aside id="content-top">

                        <?php dynamic_sidebar('Content Top'); ?>

                    </aside>

                

                <?php endif; ?>

    

    

    

    

    

            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $args = array( 'cat' => 3, 'posts_per_page' => 2, 'paged' => $paged );  query_posts($args); ?>

                <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>

                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="entry-content">

    

    

    

    

    

    

                            <div class="page-header">

                                <h3 class="entry-title title">

                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                </h3>

                            </div>

    


    
							
                                    
							<?php
                                if ( has_post_thumbnail() ) {
									echo '<div class="thumbnail"><div class="post_img">';
									the_post_thumbnail();
									echo '</div></div>';
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

    

    

    

                            <div class="info">

    

    

                            <div>

                            <i class="icon-user"></i>

                                <div class="author">Posted By 

                                    <?php

                                            $autor_id = $post->post_author;

                                            $autor_name = the_author_meta('user_nicename', $autor_id);

                                            echo $autor_name;

                                    ?>

                                </div>

                            </div>

    

    

    

    

    						<div>

    						<i class="icon-calendar"></i>

                                <div class="post_date">

                                    <span class="month"><?php the_time('F') ?></span>

                                    <span class="actdate"><?php the_time('d') ?></span>

                                    <span class="year"><?php the_time('Y') ?></span>

                                </div>

    						</div>

    

    

    

    

    						<div>

    						<i class="icon-tags"></i>

                                <div class="tags">

                                    <?php

                                        $post_tags = get_the_tags();

                                        $tag_count = count($post_tags);

                                        if ( $tag_count ) {	echo "$tag_count Tags";	}

                                    ?>

                                </div>

    						</div>

    

    

    

    

    

    						<div>

    						<i class="icon-comments"></i>

                                <div class="comments">

                                    <?php comments_number( 'no responses', 'one response', '% responses' ); ?><br />

                                </div>

    						</div>

    

    

    

    

    

    

                            </div>

    

    

                            <?php

                                $review = get_post_meta($post->ID, 'id-review', true);

                                $thispost = get_post( $review );

                                $content = $thispost->post_content;

                                $readmore = wp_trim_words( $content, $num_words = 55, $more = '...' );

                                echo $readmore ;


                            ?>
                            
                            <a href="<?php the_permalink(); ?>" class="btn btn-mini readmore" type="button">Read More...</a>

                                

    

    

    

    

    

    

                        </div>

                    </div>

                <?php endwhile; ?>

                <?php endif; ?>

                

                <div class="navigation">

                    <div class="alignleft">

                        <?php previous_posts_link(); ?>

                    </div>

                    <div class="alignright">

                        <?php next_posts_link(); ?>

                    </div>

                </div>

                <?php wp_reset_query(); ?>

                

    

    

    

    

    

           

                <?php if ( is_active_sidebar('Content Bottom') ) : ?>

    

                    <aside id="content-bottom">

                        <?php dynamic_sidebar('Content Bottom'); ?>

                    </aside>

    

                <?php endif; ?>

                

    

    

    

    

    

				</div>

			</section>

<?php get_sidebar('right'); ?>

</div>

</div>

</div>

<?php get_footer(); ?>