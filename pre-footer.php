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
          <div class="button button-custom">
            <a href="<?php echo $button_link; ?>" target="<?php echo $button_target; ?>">
              <span><?php echo $button_text; ?></span>
              <span><?php echo $button_text; ?></span>
            </a>
          </div>
        <?php } ?>
    </div>
  </section>
<?php } ?>