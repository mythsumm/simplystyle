<?php get_header(); ?>

<div id="bd">
    <div id="yui-main">
        <div class="yui-b">
            <?php while (have_posts ()) : the_post(); ?>
                <!-- Basic block -->
                <div class="block">
                    <div class="hd">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="bd">
                    <?php if (post_password_required ()) : ?>
                    <?php the_content(); ?>
                    <?php else : ?>
                    <?php the_content(); ?>
                    <?php comments_popup_link(); ?>
                            <!-- tag list -->
                    <?php
                            $tags_list = get_the_tag_list('', ', ');
                            if ($tags_list):
                    ?>
                    <?php printf(__('<span class="%1$s">Tagged</span> %2$s', 'twentyten'), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list); ?>
                    <?php endif; ?>
                    <?php endif; ?>
                            </div>
                        </div>
            <?php endwhile; // End the loop. Whew. ?><!-- end of posts -->
                            </div>
                            <div class="yui-b block">
                                <div class="yui-g">
                <?php /* Display navigation to next/previous pages when applicable */ ?>
                <?php if ($wp_query->max_num_pages > 1) : ?>
                                    <div class="yui-u first">
                    <?php next_posts_link(__('<span>&larr;</span> Older posts', 'twentyten')); ?>
                                </div>
                                <div class="yui-u right">
                    <?php previous_posts_link(__('Newer posts <span>&rarr;</span>', 'twentyten')); ?>
                                </div><!-- #nav-above -->
                <?php endif; ?>
                                    <!-- end of navigation to next/previous -->
                                </div>
                            </div>
                        </div><!-- end of content -->
                        <div class="yui-b">
        <?php get_sidebar(); ?>
                                </div><!-- end of siderbar -->

                            </div>
<?php get_footer(); ?>
