<?php get_header();
while (have_posts()) : the_post(); ?>

    <div class="page-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
    <div class="container mt-5 page-wrapper">
        <?php get_template_part('inc/content', 'page'); ?>
    </div>

<?php endwhile;
get_footer(); ?>