<?php if( get_row_layout() == 'content_testimonials' ) {  
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $testimonials = get_sub_field('testimonials');
  $bgcolor = (get_sub_field('background_color')) ? get_sub_field('background_color') : '#efe6d5';
  $textcolor = (get_sub_field('text_color')) ? get_sub_field('text_color') : '#2f3030';
  $border_color = (get_sub_field('border_color')) ? get_sub_field('border_color') : '#dfc0b8';
  if($title || $content || $testimonials) { ?>
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
  </style>
  <section class="repeatable-content repeatable-content-testimonails repeatable--<?php echo get_row_layout() ?> repeatable--<?php echo get_row_layout() ?>-<?php echo $i ?>" style="background-color:<?php echo $bgcolor ?>; color:<?php echo $textcolor ?>">
    <div class="repeatable-inner">
      <div class="quote-grid large-padding">
        <?php if ($title) { ?>
          <div class="content-wrapper">
            <h2 class="title"><?php echo $title ?></h2>
          </div>
        <?php } ?>

        <?php if ($testimonials) { ?>
          <div class="quote-wrapper">
            <?php if ($subtitle) { ?>
              <div class="subtitle"><?php echo anti_email_spam($subtitle); ?><img src="<?php echo get_template_directory_uri() ?>/images/arrow-down.svg" alt="" class="arrow-down"></div>
            <?php } ?>
            <div class="quote-slider" style="border-color:<?php echo $border_color; ?>">
              <div class="quote-list">
                <?php
                  $i = 1;
                    foreach ($testimonials as $post) {
                    setup_postdata($post);
                    $post_id = $post-> ID;
                    $thumbnail_id = get_post_thumbnail_id($post_id);
                    $featImage = wp_get_attachment_image_src($thumbnail_id,'large');

                    $position = get_field('position', $post_id);
                ?>
                    <div class="quote-item">
                      <div class="quote-content">
                        <div class="quote-flex">
                          <?php if($thumbnail_id): ?>
                          <div class="quote-image">
                            <div class="quote-height"></div>
                            <img src="<?php echo $featImage[0]; ?>" alt="<?php the_title(); ?>">
                          </div>
                          <?php endif; ?>
                          <div class="quote-text">
                            <?php the_content(); ?>
                            <div class="quote-credit">
                              <div class="quote-name"><?php the_title(); ?></div>
                              <div class="quote-position"><?php echo $position; ?></div>
                            </div>
                          </div>
                        </div>
                      </div>                  
                    </div>
                <?php
                    $i++;

                    wp_reset_postdata();
                  }
                ?>
              </div>
              <div class="right-arrow bottom-arrow w-slider-arrow-left" style="border-color:<?php echo $border_color; ?>">
              <div class="right-arrow w-slider-arrow-right" style="border-color:<?php echo $border_color; ?>">
            </div>
          </div>  
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } ?>
<?php } ?>