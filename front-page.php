<?php 
get_header(); 
?>
<div id="primary" class="homepage-content content-area-full generic-layout">
  <main id="main" class="site-main" role="main">

    <?php
      $banner = get_field('banner');

      if($banner){
    ?>
      <div id="banner" class="banner-section">
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
              <h1 class="banner-title"><?php echo $banner_title; ?></h1>
              <div class="banner-content"><?php echo $banner_content; ?></div>
            
              <?php if($banner_button && $banner_button_text && $banner_button_link) { ?>
                <div class="button">
                  <a href="<?php echo $banner_button_link; ?>" target="<?php echo $banner_button_target; ?>"><?php echo $banner_button_text; ?> <i class="fa-solid fa-arrow-right"></i></a>
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