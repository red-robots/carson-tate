<?php 
get_header(); 
?>
<div id="primary" class="homepage-content content-area-full generic-layout">
  <main id="main" class="site-main" role="main">

    <?php
      $banner = get_field('banner');

      if($banner){
    ?>
      <div id="banner" class="banner-section large-padding">
        <div class="wrapper">
          <div class="banner-container">
            <?php
              foreach ($banner as $b) {
                $banner_title = $b['banner_title'];
                $banner_content = $b['banner_content'];
                $banner_button = $b['banner_button'];
                $banner_button_text = (isset($banner_button['title']) && $banner_button['title']) ? $banner_button['title'] : '';
                $banner_button_link = (isset($banner_button['url']) && $banner_button['url']) ? $banner_button['url'] : '';
                $banner_button_target = (isset($banner_button['target']) && $banner_button['target']) ? $banner_button['target'] : '_self';
            ?>
              <div class="banner-title"><?php echo $banner_title; ?></div>
              <div class="banner-content text-large"><?php echo $banner_content; ?></div>
            
              <?php if($banner_button && $banner_button_text && $banner_button_link) { ?>
                <div class="button button-custom">
                  <a href="<?php echo $banner_button_link; ?>" target="<?php echo $banner_button_target; ?>">
                    <span>
                      <?php echo $banner_button_text; ?>
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
                      <?php echo $banner_button_text; ?>
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
            <?php } ?>
          </div>
        </div>
        <div class="banner-bg">
            <img src="<?php echo get_template_directory_uri() ?>/images/banner-left-bottom.svg" loading="lazy" width="333.5" alt="" class="banner-bg-left">
            <img src="<?php echo get_template_directory_uri() ?>/images/banner-right-top.svg" loading="lazy" width="333.5" alt="" class="banner-bg-right">
          </div>
      </div>
    <?php } ?>

    <?php get_template_part('parts/repeatable-blocks'); ?>

  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();