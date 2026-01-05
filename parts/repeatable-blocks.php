<?php 
$post_id = get_the_ID();
if( have_rows('flexible_content', $post_id) ) {
  $i=1;
  
  while( have_rows('flexible_content',$post_id) ): the_row();

    include( locate_template('parts-flexible/two_column_image_and_text.php') );
    include( locate_template('parts-flexible/fullwidth_content_large_text.php') );
    include( locate_template('parts-flexible/flexible_content_faqs.php') );
    include( locate_template('parts-flexible/content_gallery.php') );
    include( locate_template('parts-flexible/content_testimonials.php') );
    include( locate_template('parts-flexible/content_testimonials_image.php') );
    include( locate_template('parts-flexible/content_number_list_with_image.php') );
      
    $i++;
  endwhile;
} ?>