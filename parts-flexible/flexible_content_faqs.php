<?php if( get_row_layout() == 'flexible_content_faqs' ) { 
  $title = get_sub_field('title');
  $content = get_sub_field('textcontent');
  $bgimage = (get_sub_field('background_image')) ? get_sub_field('background_image') : get_template_directory_uri().'/images/bg-faq.webp';
  $bgcolor = (get_sub_field('bgcolor')) ? get_sub_field('bgcolor') : '#f0f2d8';
  $textcolor = (get_sub_field('textcolor')) ? get_sub_field('textcolor') : '#2f3030';
  if($title) { ?>
  <style>
    #fullwidth_content_repeatable--<?php echo $i ?> h1,
    #fullwidth_content_repeatable--<?php echo $i ?> h2,
    #fullwidth_content_repeatable--<?php echo $i ?> h3,
    #fullwidth_content_repeatable--<?php echo $i ?> h4,
    #fullwidth_content_repeatable--<?php echo $i ?> h5,
    #fullwidth_content_repeatable--<?php echo $i ?> h6,
    #fullwidth_content_repeatable--<?php echo $i ?> p {
      color: #2f3030;
    }
  </style>
  <div id="fullwidth_content_repeatable--<?php echo $i ?>" class="fullwidth_content_repeatable repeatable flexible_content_faqs" style="background-color:<?php echo $bgcolor ?>; color:<?php echo $textcolor ?>">
    <div class="wrapper">
      <h2 class="title"><?php echo $title; ?></h2>
      <div class="content"><?php echo anti_email_spam($content); ?></div>
    </div>
    <div class="side-banner">
      <img src="<?php echo $bgimage; ?>" class="image-cover">
      <div class="image-overlay"></div>
    </div>
  </div>
  <?php } ?>
<?php } ?>