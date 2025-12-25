<?php if( get_row_layout() == 'flexible_content_faqs' ) { 
  $title = get_sub_field('title');
  $content = get_sub_field('textcontent');
  $bgimage = (get_sub_field('background_image')) ? get_sub_field('background_image') : get_template_directory_uri().'/images/bg-faq.webp';
  $bgcolor = (get_sub_field('bgcolor')) ? get_sub_field('bgcolor') : '#f0f2d8';
  $textcolor = (get_sub_field('textcolor')) ? get_sub_field('textcolor') : '#2f3030';
  $faqs = get_sub_field('faqs_list');
  if($title) { ?>
  <style>
    #fullwidth_content_repeatable--<?php echo $i ?> h1,
    #fullwidth_content_repeatable--<?php echo $i ?> h2,
    #fullwidth_content_repeatable--<?php echo $i ?> h3,
    #fullwidth_content_repeatable--<?php echo $i ?> h4,
    #fullwidth_content_repeatable--<?php echo $i ?> h5,
    #fullwidth_content_repeatable--<?php echo $i ?> h6,
    #fullwidth_content_repeatable--<?php echo $i ?> p {
      color: inherit;
    }
  </style>
  <section id="fullwidth_content_repeatable--<?php echo $i ?>" class="fullwidth_content_repeatable repeatable flexible_content_faqs" style="background-color:<?php echo $bgcolor ?>; color:<?php echo $textcolor ?>">
    <div class="wrapper large-padding">
      <?php if( $title || $content ){ ?>
        <div class="title"><?php echo $title; ?></div>
        <div class="subtitle"><?php echo anti_email_spam($content); ?><img src="<?php echo get_template_directory_uri() ?>/images/arrow-down.svg" alt="" class="arrow-down"></div>
      <?php } ?>
      <?php if($faqs){ ?>
        <div class="faqs">
          <?php
            foreach($faqs as $faq){
              $faq_title = $faq['faq_title'];
              $faq_content = $faq['faq_content'];
          ?>
            <div class="faq">
              <div class="faq-title"><?php echo $faq_title ?><span class="icon"><img src="<?php echo get_template_directory_uri() ?>/images/x.svg" alt="" class="icon-close"></span></div>
              <div class="faq-content"><?php echo $faq_content ?></div>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
    <div class="side-banner">
      <img src="<?php echo $bgimage; ?>" class="image-cover">
      <div class="image-overlay"></div>
    </div>
  </section>
  <?php } ?>
<?php } ?>