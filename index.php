<!-- including header file start here -->
 <?php get_header(); ?>
<!-- including header file end here -->

<section>
    <!-- sidebar including directory path start here -->
    <?php get_sidebar(); ?>
    <!-- sidebar including directory path end here -->

<!-- content including directory part start here -->
<?php
if(have_posts()):
    while(have_posts()): the_post();
    get_template_part('template-parts/content', get_post_format());

    endwhile;
    else:  _e('there are no found post','wplearn');
endif;
 
?>
<!-- content including directory part end here -->


<!-- content including directory part start here -->


<?php //get_template_part('template-parts/content','video','audio'); ?>
<?php // get_template_part('template-parts/content', 'audio'); ?>


<!-- content including directory part end here -->
</section>
</section>

<!-- footer including directory path start here -->
 <?php get_footer(); ?>
<!-- footer including directory path end here -->