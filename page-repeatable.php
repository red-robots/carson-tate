<?php
/**
 * Template Name: Flexible Content
 */
get_header(); ?>
<div id="primary" class="content-area-full generic-layout">
  <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('parts/repeatable-blocks'); ?>
    <?php endwhile; ?>
  </main>
</div>
<?php
get_footer();