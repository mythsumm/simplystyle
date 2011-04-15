<?php get_header(); ?>

<div class="span-16 colborder">
<?php
if(have_posts()):
    while (have_posts()): the_post();
?>
<div class="entry-post">
<div class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
<div class="entry-meta">Posted on <?php the_time('Y/m/d'); ?> By <?php the_author(); ?></div>
<div class="entry-content">
<?php if (post_password_required ()) : ?>
<?php the_content(); ?>
<?php else : ?>
<?php the_content(); ?>
<?php endif; ?>
</div>
<div class="entry-utility"><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?> | <?php the_tags('Tags:', ','); ?> | Categories: <?php the_category(', ') ?> </div>
</div>
<?php comments_template(); ?>
<?php
    endwhile;
endif;
?>

<?php if ($wp_query->max_num_pages > 1) : ?>
<div class="pagination">
<div class="span-6 left">
<?php next_posts_link(__('<span>&laquo;</span> Older posts', '')); ?>
</div>
<div class="span-6 last right">
<?php previous_posts_link(__('Newer posts <span>&raquo;</span>', '')); ?>
</div>
</div><?php endif; ?><!-- pagination -->

</div>
<div class="span-7 last">
    <?php get_sidebar(); ?>
</div>
<!-- end of content -->
        
<?php get_footer(); ?>