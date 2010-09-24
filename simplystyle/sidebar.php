<div id="sidebar" class="yui-b">
    <!-- Sidebar block (same markup as basic block) -->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
        <div class="block">
        <?php get_search_form(); ?>
    </div>
    <div class="block">
        <h3><?php _e('Archives', 'twentyten'); ?></h3>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>
    <?php endif; ?>

</div><!-- end of #sidebar -->
