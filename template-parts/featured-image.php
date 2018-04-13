<div class="hero-header">
  <div class="slick-slide heading-image" style="background-image: url(<?php echo header_post_image() ?>)">
  <?php get_image_result(header_post_image()); ?>

  <?php
  global $post;
  if(has_post_thumbnail()) {
    $imgdata = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero-header', false);
    $imgwidth = $imgdata[1];
    $wanted_width = 1600;
  }
  ?>
  <div class="overlay-slide item">
    <div class="item-text">
      <h5 class="header-text-area"><?php echo get_author_meta('name'); ?></h5>
      <a href="<?php the_permalink() ?>">
        <h2 class="header-text-area"><?php the_title(); ?></h2>
      </a>
      <h5 class="header-text-area">Reading time <span class="eta"></span></h5>
    </div>
  </div>
  </div>
</div>
