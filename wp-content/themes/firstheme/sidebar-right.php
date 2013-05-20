        <?php if ( is_active_sidebar('Right Sidebar') ) : ?>
            <aside id="right-sidebar" class="<? $meta = get_post_meta( $post->ID, 'right_sidebar', TRUE );	echo $meta;	?>">
				<?php dynamic_sidebar('Right Sidebar'); ?>
            </aside>
        <?php endif; ?>