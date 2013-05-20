<?php
/*
Template Name: search
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
    
    
    
    
    
				<?php if (have_posts()) : ?>
                
                <h2 class="pagetitle">Search Results for "<?php echo $s ?>"</h2>
                
                <div class="navigation">
                <div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
                <div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
                </div>
                <div class="clear"></div>
                
                <?php while (have_posts()) : the_post(); ?>
                
                <div class="post" id="post-<?php the_ID(); ?>">
                
                <p class="large nomargin"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></p>
                <?php
                // Support for "Search Excerpt" plugin
                // http://fucoder.com/code/search-excerpt/
                if ( function_exists('the_excerpt') && is_search() ) {
                the_excerpt();
                } ?>
                <p class="small">
                <?php the_time('F jS, Y') ?> &nbsp;|&nbsp;
                <!-- by <?php the_author() ?> -->
                Published in
                <?php the_category(', ');
                if($post->comment_count > 0) {
                echo ' &nbsp;|&nbsp; ';
                comments_popup_link('', '1 Comment', '% Comments');
                }
                ?>
                </p>
                </div>
                <hr>
                <?php endwhile; ?>
                
                <div class="navigation">
                <div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
                <div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
                </div>
                
                <?php else : ?>
                
                <h2 class="center">No posts found. Try a different search?</h2>
                <?php get_search_form(); ?>
                
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
</div>
</div>
<?php get_footer(); ?>