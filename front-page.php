<?php 
get_header(); 
?>
<div id="primary" class="homepage-content">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <header class="entry-title">
        <h1><?php the_title(); ?></h1>
      </header>
      
      <div class="entry-content">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>

  </main><!-- #main -->
</div><!-- #primary -->>
<?php
get_footer();