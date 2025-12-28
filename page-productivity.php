<?php
/**
 * Template Name: Productivity Style
 */

get_header(); 
global $post;
$slug = $post->post_name;

$title = get_the_title();
$content = get_the_content();
$thumbId = get_post_thumbnail_id(); 
$featImg = wp_get_attachment_image_src($thumbId,'full');
$aboutclass = ($title && $featImg) ? 'half':'full';

$button = get_field('button');
?>

<div id="primary" class="content-area-full productivity-page-template">
  <main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>      

      <div class="splitbox large-padding large-padding-top large-padding-medium-bottom">
        <div class="splitbox-title">
          <h1 class="title-header font-canela"><?php the_title(); ?></h1>
        </div>
        <?php if ( $content ) { ?>
          <div class="splitbox-content">
            <div class="splitbox-text"><?php echo $content; ?></div>
            <?php
              $button_text = (isset($button['title']) && $button['title']) ? $button['title'] : '';
              $button_link = (isset($button['url']) && $button['url']) ? $button['url'] : '';
              $button_target = (isset($button['target']) && $button['target']) ? $button['target'] : '_self';

              if($button && $button_text && $button_link) {
            ?>
              <div class="button button-custom">
                <a href="<?php echo $button_link; ?>" target="<?php echo $button_target; ?>">
                  <span>
                    <?php echo $button_text; ?>
                    <i class="icon-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 10 11" fill="none">
                        <g clip-path="url(#clip0_6_575)">
                          <path d="M1 5.41016H9M9 5.41016L5 1.41016M9 5.41016L5 9.41016" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_6_575">
                            <rect width="10" height="10" fill="currentcolor" transform="translate(0 0.410156)"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </i>
                  </span>
                  <span>
                    <?php echo $button_text; ?>
                    <i class="icon-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 10 11" fill="none">
                        <g clip-path="url(#clip0_6_575)">
                          <path d="M1 5.41016H9M9 5.41016L5 1.41016M9 5.41016L5 9.41016" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_6_575">
                            <rect width="10" height="10" fill="currentcolor" transform="translate(0 0.410156)"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </i>
                  </span>
                </a>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
          
        </div>
        <?php
            $thumbId = get_post_thumbnail_id(); 
            $featImg = wp_get_attachment_image_src($thumbId,'full');

            if($featImg){
          ?>
          <div class="service-banner">
            <img src="<?php echo $featImg[0]; ?>" alt="<?php echo $featImg[0]; ?>"></a>
          </div>
        <?php } ?>
      </div>
    <?php endwhile; ?>

    <?php get_template_part('parts/repeatable-blocks'); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
