<?php

/*

Template Name: 404

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

    

    

    

    

    

				<article id="post-0" class="post error404 not-found">

				<header class="entry-header">

					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'firstheme' ); ?></h1>

				</header>



				<div class="entry-content">

                	<div class="row-fluid">

                        <div class="span9">

                            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'firstheme' ); ?></p>

                        </div>

                        <div class="span3">

                            <?php get_search_form(); ?>

                        </div>

                    </div>

					<div class="row-fluid">

                    

                    	<div class="span3">

							<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>

    					</div>

                        

                        <div class="span3">

                            <div class="widget">

                                <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'firstheme' ); ?></h2>

                                <ul>

                                <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>

                                </ul>

                            </div>

    					</div>

                        

                        <div class="span3">

							<?php

                            $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'firstheme' ), convert_smilies( ':)' ) ) . '</p>';

                            the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );

                            ?>

                        </div>

                        

                        <div class="span3">

                        	<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

                        </div>

					</div>

				</div>

			</article>                

    

    

    

    

    

           

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