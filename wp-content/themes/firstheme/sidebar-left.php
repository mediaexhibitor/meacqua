        <?php if ( is_active_sidebar('Left Sidebar') ) : ?>
            <aside id="left-sidebar" class="<? $meta = get_post_meta( $post->ID, 'left_sidebar', TRUE ); echo $meta; ?>">
				<?php dynamic_sidebar('Left Sidebar'); ?>
            </aside>
        <?php endif; ?>