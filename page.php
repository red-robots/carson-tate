<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */
get_header(); ?>

<div id="primary" class="content-area generic-layout">
  <main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <div class="large-padding">
        <header class="entry-title">
          <h1><?php the_title(); ?></h1>
        </header>
        
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>

		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
