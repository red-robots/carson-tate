<?php
/**
 * Template Name: About
 */

get_header(); 
global $post;
$slug = $post->post_name;

$title = get_the_title();
$thumbId = get_post_thumbnail_id(); 
$featImg = wp_get_attachment_image_src($thumbId,'full');
$aboutclass = ($title && $featImg) ? 'half':'full';

$numbers = get_field('numbers');
$subtitle = get_field('subtitle');
$more_content = get_field('more_content');
$image = get_field('image');
$button = get_field('button');
?>

<div id="primary" class="content-area-full about-page-template">
  <main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>      

      <div class="about-grid about-grid-<?php echo $aboutclass; ?>">
        <?php
            $thumbId = get_post_thumbnail_id(); 
            $featImg = wp_get_attachment_image_src($thumbId,'full');

            if($featImg){
          ?>
          <div class="about-image">
              <img src="<?php echo $featImg[0]; ?>" alt="Carson Tate"></a>
              <div class="image-overlay"></div>
          </div>
        <?php } ?>
        <div class="about-content">
          <div class="large-padding">
            <h1 class="about-title title-header"><?php the_title(); ?></h1>
            <?php if ( get_the_content() ) { ?>
              <div class="about-text"><?php the_content(); ?></div>
            <?php } ?>
          </div>
          <?php if($numbers){ ?>
            <div class="about-numbers">
              <?php
                foreach( $numbers as $num ) {
                  $number = $num['number'];
                  $heading = $num['heading'];
                  $plus = $num['has_plus_sign'];
              ?>
                <div class="number-item">
                  <div class="number-content">
                    <div class="number-flex">
                      <div class="number-heading"><?php echo $number; ?></div>
                      <?php if($plus == '1'): ?>
                        <div class="embed-icon w-embed">
                          <svg width="100%" height="100%" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.274414 12.1071V10.0911H21.9744V12.1071H0.274414ZM10.0464 21.9631V0.235107H12.2024V21.9631H10.0464Z" fill="#131313"></path></svg>
                        </div>
                      <?php endif; ?>
                    </div>
                    <div class="number-text">
                      <div><?php echo $heading; ?></div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php
            }

            if($subtitle || $more_content || $image || $button ){
              echo '<div class="large-padding">';
            }

            if($subtitle){
          ?>
            <div class="subtitle">
              <div class="subtitle-text">
                <?php echo anti_email_spam($subtitle); ?>
              </div>
              <img src="<?php echo get_template_directory_uri() ?>/images/arrow-down.svg" alt="" class="arrow-down">
            </div>
          <?php
            } if($more_content){
          ?>
            <div class="more-content">
              <?php echo $more_content; ?>
            </div>
          <?php
            } if($image){
          ?>
            <div class="more-image">
              <figure>
                <img src="<?php echo $image['url'];?>" title="<?php echo $image['title'];?>">
              </figure>
            </div>
          <?php
            }

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
          <?php
            } if($subtitle || $more_content || $image || $button ){
              echo '</div>';
            }
          ?>
          </div>
      </div>
    <?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
