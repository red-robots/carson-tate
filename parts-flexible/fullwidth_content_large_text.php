<?php if( get_row_layout() == 'fullwidth_content_large_text' ) {  
  $content = get_sub_field('textcontent');
  $bgcolor = (get_sub_field('background_color')) ? get_sub_field('background_color') : '#fcfcfc';
  $textcolor = (get_sub_field('text_color')) ? get_sub_field('text_color') : '#2f3030';
  $button = get_sub_field('button');
  $buttontextcolor = (get_sub_field('button_text_color')) ? get_sub_field('button_text_color') : '#2f3030';
  $buttonbordercolor = (get_sub_field('button_border_color')) ? get_sub_field('button_border_color') : '#c1c1c1';
  $buttonbgcolor = (get_sub_field('button_bg_color')) ? get_sub_field('button_bg_color') : 'transparent';
  $maxwidth = (get_sub_field('max_width')) ? get_sub_field('max_width') : '55';
  if($content) { ?>
  <style>
    #fullwidth_content_repeatable--<?php echo $i ?> h1,
    #fullwidth_content_repeatable--<?php echo $i ?> h2,
    #fullwidth_content_repeatable--<?php echo $i ?> h3,
    #fullwidth_content_repeatable--<?php echo $i ?> h4,
    #fullwidth_content_repeatable--<?php echo $i ?> h5,
    #fullwidth_content_repeatable--<?php echo $i ?> h6,
    #fullwidth_content_repeatable--<?php echo $i ?> p {
      color: <?php echo $textcolor ?>;
    }
    <?php if ($button) { ?>
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
  <section id="fullwidth_content_repeatable--<?php echo $i ?>" class="fullwidth_content_repeatable repeatable fullwidth_content_large_text large-padding" style="background-color:<?php echo $bgcolor ?>;?>">
    <div class="wrapper maxwidth-<?php echo $maxwidth; ?>">
      <div class="textwrap" style="color:<?php echo $textcolor ?>"><?php echo anti_email_spam($content) ?></div>
      <?php 
          $button_text = (isset($button['title']) && $button['title']) ? $button['title'] : '';
          $button_link = (isset($button['url']) && $button['url']) ? $button['url'] : '';
          $button_target = (isset($button['target']) && $button['target']) ? $button['target'] : '_self';

          if($button && $button_text && $button_link) {
        ?>
          <div class="button">
            <a href="<?php echo $button_link; ?>" target="<?php echo $button_target; ?>">
              <?php echo $button_text; ?>
              <span class="icon-arrow">
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
              </span>
            </a>
          </div>
        <?php } ?>
    </div>
  </section>
  <?php } ?>
<?php } ?>