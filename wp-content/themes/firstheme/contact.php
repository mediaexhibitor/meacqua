<?php
/*
Template Name: Contact
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
    
    
    
    
    
				<?php while ( have_posts() ) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>                
    
    
    
    
    
           
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