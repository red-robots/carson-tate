<?php  
  $title = get_field('title', 'option');
  $content = get_field('content', 'option');
  $button = get_field('button', 'option');

  if($title || $content) {
?>
  <section id="prefooter" class="pre-footer large-padding">
    <div class="wrapper">
      <h2 class="title"><?php echo $title; ?></h2>
      <div class="content"><?php echo anti_email_spam($content) ?></div>
      <?php 
          $button_text = (isset($button['title']) && $button['title']) ? $button['title'] : '';
          $button_link = (isset($button['url']) && $button['url']) ? $button['url'] : '';
          $button_target = (isset($button['target']) && $button['target']) ? $button['target'] : '_self';

          if($button && $button_text && $button_link) {
        ?>
          <div class="button">
            <a href="<?php echo $button_link; ?>" target="<?php echo $button_target; ?>">
              <?php echo $button_text; ?>
              <!-- <span class="icon-arrow">
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
              </span> -->
            </a>
          </div>
        <?php } ?>
    </div>
  </section>
<?php } ?>