<?php
/**
 * Template Name: About
 */

get_header(); 
global $post;
$slug = $post->post_name;
?>

<div id="primary" class="content-area-full about-page-template">
  <main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>      

      <div class="about-grid">
        <div class="about-content">
          <h1><?php the_title(); ?></h1>
          <?php if ( get_the_content() ) { ?>
            <section class="entry-content"><?php the_content(); ?></section>
          <?php } ?>
        </div>
        <div class="about-image"></div>
      </div>

      <div class=""></div>

    <?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
