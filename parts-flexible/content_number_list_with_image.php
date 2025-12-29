<?php if( get_row_layout() == 'content_number_list_with_image' ) { 
  $title = get_sub_field('title');
  $content = get_sub_field('content');
  $subtitle = get_sub_field('subtitle');
  $button = get_sub_field('button');
  $bgcolor = (get_sub_field('background_color')) ? get_sub_field('background_color') : '#f4ebe9';
  $textcolor = (get_sub_field('text_color')) ? get_sub_field('text_color') : '#2f3030';
  $image = get_sub_field('image');
  $image_position = get_sub_field('image_position');
  $column_class = ( ($title || $content) && $image ) ? 'half':'full';
  if($image_position) {
    $column_class .=' image-' . $image_position;
  }
  if($title || $content || $image) { ?>
  <section class="two_column_image_and_text two_column_image_and_text--<?php echo $i ?> <?php echo $column_class; ?>">
    <style>
      .two_column_image_and_text--<?php echo $i ?> h2,
      .two_column_image_and_text--<?php echo $i ?> p { color:<?php echo $textcolor ?>; }
    </style>
    <div class="repeatable-inner" style="background-color:<?php echo $bgcolor ?>;color:<?php echo $textcolor ?>">
      <div class="flexwrap <?php echo $column_class ?>">
        <?php if ( $image ) { ?>
          <div class="imagecol">
            <div class="image-item">
              <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" />
              <div class="image-overlay"></div>
          </div>
          </div>
        <?php } ?>
        <?php if ( $title || $content ) { ?>
          <div class="textcol large-padding">
            <div class="inside">
              <div class="inside-wrapper">
                 <h2 class="title"><?php echo $title; ?></h2>
                 <div class="inside-content text-regular">
                    <?php if ($content || $button) { ?>
                      <div class="content">
                        <?php echo anti_email_spam($content) ?>
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
                <?php if ($subtitle) { ?>
                  <div class="subtitle"><?php echo anti_email_spam($subtitle); ?><img src="<?php echo get_template_directory_uri() ?>/images/arrow-down.svg" alt="" class="arrow-down"></div>
                <?php } ?>
                <?php
                  if( have_rows('listing') ):
                    $j = 1;
                ?>
                  <div class="listing">
                    <?php 
                      while( have_rows('listing') ): the_row();  
                        $list = get_sub_field('list');
                    ?>
                        <div class="list-item quote-item-<?php echo $i; ?>">
                          <div class="text-small"><?php printf('%02d', $j); ?></div>
                          <div class="text-regular"><?php echo $list; ?></div>             
                        </div>
                    <?php
                        $j++;
                      endwhile;
                    ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } ?>
<?php } ?>
