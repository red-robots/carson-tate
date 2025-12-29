<?php if( get_row_layout() == 'content_testimonials_image' ) {  
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

  $image = get_sub_field('image');
  $image_position = get_sub_field('image_position');
  $column_class = ( ($title || $content) && $image ) ? 'half':'full';
  if($image_position) {
    $column_class .=' image-' . $image_position;
  }

  if($title || $content || $subtitle || $testimonials) { ?>
  <style>
    .two_column_image_and_text--<?php echo $i ?> h1,
    .two_column_image_and_text--<?php echo $i ?> h2,
    .two_column_image_and_text--<?php echo $i ?> h3,
    .two_column_image_and_text--<?php echo $i ?> h4,
    .two_column_image_and_text--<?php echo $i ?> h5,
    .two_column_image_and_text--<?php echo $i ?> h6,
    .two_column_image_and_text--<?php echo $i ?> p {
      color: <?php echo $textcolor; ?>
    }
    <?php if ($testimonials) { ?>
      .two_column_image_and_text--<?php echo $i ?> .quote-slider,
      .two_column_image_and_text--<?php echo $i ?> .quote-list .owl-nav button {
        border-color: <?php echo $border_color; ?>
      }
    <?php } if ($button) { ?>
      .two_column_image_and_text--<?php echo $i ?> .button a {
        background-color: <?php echo $buttonbgcolor; ?>;
        color: <?php echo $buttontextcolor ?>;
        border: 1px solid <?php echo $buttonbordercolor; ?>;
      }
      .two_column_image_and_text--<?php echo $i ?> .button a:hover {
        color: <?php echo $buttonbordercolor ?>;
        background-color: <?php echo $buttontextcolor; ?>;
      }
  <?php } ?>
  </style>
  <section class="repeatable-content repeatable-content-testimonails repeatable-content-testimonails-image two_column_image_and_text two_column_image_and_text--<?php echo $i ?> <?php echo $column_class; ?>" style="background-color:<?php echo $bgcolor ?>; color:<?php echo $textcolor ?>">
    <div class="repeatable-inner">

    <div class="flexwrap <?php echo $column_class ?>">
        <?php if ( $image ) { ?>
          <div class="imagecol">
            <div class="image-item">
              <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" />
              <div class="image-overlay"></div>
          </div>
          </div>
        <?php } ?>
        <?php if ( $title ) { ?>
          <div class="textcol large-padding">
            <div class="inside">
              <div class="inside-wrapper">
                 <h2 class="title"><?php echo $title; ?></h2>
                 <div class="inside-content">
                    <?php if ($content) { ?>
                      <div class="content no-margin-b small-heading"><?php echo anti_email_spam($content) ?></div>
                    <?php } ?>
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
                  <div class="quote-grid quote-grid-small medium-padding-tb">
                    <?php if ($testimonials) { ?>
                      <div class="quote-wrapper">
                        <?php if ($subtitle) { ?>
                          <div class="subtitle"><?php echo anti_email_spam($subtitle); ?><img src="<?php echo get_template_directory_uri() ?>/images/arrow-down.svg" alt="" class="arrow-down"></div>
                        <?php } ?>
                        <div class="quote-list quote-list-small">
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
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } ?>
<?php } ?>