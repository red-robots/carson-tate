<?php if( get_row_layout() == 'two_column_image_and_text' ) { 
  $title = get_sub_field('title');
  $content = get_sub_field('textcontent');
  $button = get_sub_field('button');
  $bgcolor = (get_sub_field('background_color')) ? get_sub_field('background_color') : '#f4ebe9';
  $textcolor = (get_sub_field('text_color')) ? get_sub_field('text_color') : '#2f3030';
  $button_text_color = (get_sub_field('button_text_color')) ? get_sub_field('button_text_color') : '#f2eee9';
  $button_bg_color = (get_sub_field('button_bg_color')) ? get_sub_field('button_bg_color') : '#ab653c';
  $button_border_color = (get_sub_field('button_border_color')) ? get_sub_field('button_border_color') : '#ececec';
  $button_text_color_hover = (get_sub_field('button_text_color_hover')) ? get_sub_field('button_text_color_hover') : '#f2eee9';
  $button_bg_color_hover = (get_sub_field('button_bg_color_hover')) ? get_sub_field('button_bg_color_hover') : '#ceb8ad';
  $image = get_sub_field('image');
  $image_position = get_sub_field('image_position');
  $column_class = ( ($title || $content) && $image ) ? 'half':'full';
  if($image_position) {
    $column_class .=' image-' . $image_position;
  }
  $contentSpacing = (get_sub_field('content_spacing')) ? get_sub_field('content_spacing') : 'no-margin-b';
  $contentText = (get_sub_field('content_text')) ? get_sub_field('content_text') : 'small-heading';
  $contentTextAlignment = (get_sub_field('content_text_alignment')) ? get_sub_field('content_text_alignment') : 'align-left';
  
  if($title || $content || $image) { ?>
  <section class="two_column_image_and_text two_column_image_and_text--<?php echo $i ?> <?php echo $column_class; ?>">
    <style>
      .two_column_image_and_text--<?php echo $i ?> h2,
      .two_column_image_and_text--<?php echo $i ?> p { color:<?php echo $textcolor ?>; }
      <?php if ($button_text_color) { ?>
        .two_column_image_and_text--<?php echo $i ?> .button a {
          color: <?php echo $button_text_color ?>;
          background-color: <?php echo $button_bg_color ?>;
          border: 1px solid <?php echo $button_border_color ?>;
        }
        .two_column_image_and_text--<?php echo $i ?> .button a:hover {
          color: <?php echo $button_text_color_hover ?>;
          border: 1px solid <?php echo $button_bg_color_hover ?>;
          background-color: <?php echo $button_bg_color_hover ?>;
        }
      <?php } ?>
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
                 <div class="inside-content">
                    <?php if ($content) { ?>
                      <div class="content <?php echo $contentSpacing; ?> <?php echo $contentText; ?> <?php echo $contentTextAlignment; ?>"><?php echo anti_email_spam($content) ?></div>
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
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } ?>
<?php } ?>
