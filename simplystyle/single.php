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
            <?php comments_template(); ?>
                            </div>
                        </div><!-- end of content -->
                        <div class="yui-b">
        <?php get_sidebar(); ?>
                            </div><!-- end of siderbar -->

                        </div>
<?php get_footer(); ?>