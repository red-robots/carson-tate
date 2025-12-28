<?php if( get_row_layout() == 'content_testimonials' ) {  
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $content = get_sub_field('content');
  $button = get_sub_field('button');
  $testimonials = get_sub_field('testimonials');

  $bgcolor = (get_sub_field('background_color')) ? get_sub_field('background_color') : '#efe6d5';
  $textcolor = (get_sub_field('text_color')) ? get_sub_field('text_color') : '#2f3030';
  $border_color = (get_sub_field('border_color')) ? get_sub_field('border_color') : '#dfc0b8';
  $buttontextcolor = (get_sub_field('button_text_color')) ? get_sub_field('button_text_color') : '#2f3030';
  $buttonbordercolor = (get_sub_field('button_border_color')) ? get_sub_field('button_border_color') : '#c1c1c1';
  $buttonbgcolor = (get_sub_field('button_bg_color')) ? get_sub_field('button_bg_color') : 'transparent';

  if($title || $content || $subtitle || $testimonials) { ?>
  <style>
    #fullwidth_content_repeatable--<?php echo $i ?> h1,
    #fullwidth_content_repeatable--<?php echo $i ?> h2,
    #fullwidth_content_repeatable--<?php echo $i ?> h3,
    #fullwidth_content_repeatable--<?php echo $i ?> h4,
    #fullwidth_content_repeatable--<?php echo $i ?> h5,
    #fullwidth_content_repeatable--<?php echo $i ?> h6,
    #fullwidth_content_repeatable--<?php echo $i ?> p {
      color: <?php echo $textcolor; ?>
    }
    <?php if ($testimonials) { ?>
      #fullwidth_content_repeatable--<?php echo $i ?> .quote-slider,
      #fullwidth_content_repeatable--<?php echo $i ?> .quote-list .owl-nav button {
        border-color: <?php echo $border_color; ?>
      }
    <?php } if ($button) { ?>
      #fullwidth_content_repeatable--<?php echo $i ?> .button a {
        background-color: <?php echo $buttonbgcolor; ?>;
        color: <?php echo $buttontextcolor ?>;
        border: 1px solid <?php echo $buttonbordercolor; ?>;
      }
      #fullwidth_content_repeatable--<?php echo $i ?> .button a:hover {
        color: <?php echo $buttonbordercolor ?>;
        background-color: <?php echo $buttontextcolor; ?>;
      }
  <?php } ?>
  </style>
  <section id="fullwidth_content_repeatable--<?php echo $i ?>" class="repeatable-content repeatable-content-testimonails repeatable--<?php echo get_row_layout() ?> repeatable--<?php echo get_row_layout() ?>-<?php echo $i ?>" style="background-color:<?php echo $bgcolor ?>; color:<?php echo $textcolor ?>">
    <div class="repeatable-inner">
      <div class="quote-grid large-padding">
        <?php if ($title) { ?>
          <div class="content-wrapper">
            <h2 class="title"><?php echo $title; ?></h2>
          </div>
        <?php } ?>

        <?php if ($testimonials) { ?>
          <div class="quote-wrapper">
            <?php if ($subtitle) { ?>
              <div class="subtitle"><?php echo anti_email_spam($subtitle); ?><img src="<?php echo get_template_directory_uri() ?>/images/arrow-down.svg" alt="" class="arrow-down"></div>
            <?php } ?>
            <div class="quote-list">
              <div class="quote-slider slider owl-carousel owl-theme">
                <?php
                  $j = 1;

                  foreach ($testimonials as $testimonial) {
                    $testimonial_id = $testimonial->ID;
                    $title = get_the_title( $testimonial_id );
                    $content = get_post_field( 'post_content', $testimonial_id );
                    $thumbnail_id = get_post_thumbnail_id($testimonial_id);
                    $featImage = wp_get_attachment_image_src($thumbnail_id,'large');
                    $position = get_field('position', $testimonial_id);
                ?>
                    <div class="quote-item quote-item-<?php echo $i; ?>">
                      <div class="quote-content">
                        <div class="quote-flex">
                          <?php if($thumbnail_id): ?>
                            <div class="quote-image">
                              <div class="quote-height"></div>
                              <img src="<?php echo $featImage[0]; ?>" alt="<?php echo $title; ?>">
                            </div>
                          <?php endif; ?>
                          <div class="quote-text">
                            <?php echo $content; ?>
                            <div class="quote-credit">
                              <div class="quote-name"><?php echo $title; ?></div>
                              <div class="quote-position"><?php echo $position; ?></div>
                            </div>
                          </div>
                        </div>
                      </div>                  
                    </div>
                <?php
                    $j++;
                  }
                ?>
              </div>
              <div id="quoteNav" class="owl-nav"></div>
            </div>
          </div>  
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } ?>
<?php } ?>