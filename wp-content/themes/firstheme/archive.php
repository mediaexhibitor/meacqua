<?php
/*
Template Name: Archives
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
    
    
    
    
    
				<?php the_post(); ?>
                
                <div class="row-fluid">
                    <div class="span9">
                        <div class="page-header">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="page-header">
                            <h3>Search</h3>
                        </div>
                        <?php get_search_form(); ?>
                    </div>
                </div>

				<div class="row-fluid">
                    <div class="span3">
                    <div class="page-header">
                    	<h3 class="entry-title">Archives by Month:</h3>
                    </div>
                        <ul>
                            <?php wp_get_archives('type=monthly'); ?>
                        </ul>
                    </div>
                    
                    <div class="span3">
                    <div class="page-header">
                    	<h3 class="entry-title">Archives by Categorie:</h3>
                    </div>
                        <ul>
                             <?php wp_list_categories(); ?>
                        </ul>
                    </div>
                    
                    <div class="span3">
                    <div class="page-header">
                    	<h2>Recent Posts</h2>
                    </div>
                        <ul>
							<?php
								$args = array( 'category' => 3, );
                                $recent_posts = wp_get_recent_posts( $args );
                                foreach( $recent_posts as $recent ){
                                    echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                                }
                            ?>
                        </ul>
                    </div>
                    
                    <div class="span3">
                    <div class="page-header">
                    	<h2>List Pages</h2>
                    </div>
                        <ul>
							<?php $args = array('depth' => 3, 'post_type' => 'page', 'post_status' => 'publish' ); wp_list_pages( $args );	?>
                        </ul>
                    </div>
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
</div>
</div>
</div>
<?php get_footer(); ?>