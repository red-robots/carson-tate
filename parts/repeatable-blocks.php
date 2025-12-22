<?php 
$post_id = get_the_ID();
if( have_rows('flexible_content', $post_id) ) { ?>
  <?php $i=1; while( have_rows('flexible_content',$post_id) ): the_row(); ?>

    <?php 
    include( locate_template('parts-flexible/two_column_image_and_text.php') ); 
    include( locate_template('parts-flexible/fullwidth_content_large_text.php') );
    include( locate_template('parts-flexible/flexible_content_faqs.php') );
    include( locate_template('parts-flexible/content_gallery.php') );
    //include( locate_template('parts-flexible/two_column_image_and_downloads.php') ); 
    //include( locate_template('parts-flexible/two_column_icons_and_gallery.php') ); 
    //include( locate_template('parts-flexible/simple_fullwidth_content_normal.php') ); 
    //include( locate_template('parts-flexible/donors_content.php') );
    //include( locate_template('parts-flexible/fullwidth_content_bgimage.php') );
    //include( locate_template('parts-flexible/three_column_image_and_downloads.php') );
    ?>

  <?php $i++; endwhile; ?>
<?php } ?>