
    <!-- Sidebar block (same markup as basic block) -->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    <div class="widget">
    	  <div class="widget-title">
	        <h3>Archives</h3>
        </div>
        <div class="widget-container">
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        </div>        
    </div>
    <?php endif; ?>
