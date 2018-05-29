<div class="main-slider">

  <!-- Args for the query -->
  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
//			'meta_query' => array(
//											array(
//			'compare' => 'EXISTS'
//			),)
  );

  $recent_posts = new WP_Query( $args );

  if( $recent_posts->have_posts() ): ?>

    <div class="hero-header">
      <!-- Loop through the posts -->
      <?php while ($recent_posts->have_posts() ) : $recent_posts->the_post() ?>

      <?php
      //Check the size of the image to see if it's suitable
      if(has_post_thumbnail()):

        $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hero-header', false);
        $imgwidth = $imgdata[1];
        $wanted_width = 1280;

        if($imgwidth >= $wanted_width) {
          $background_image = get_the_post_thumbnail_url($post->ID);
        } else {
          $background_image = "";
        }
      endif;
      ?>
        <div class="slick-slide heading-image backup-slide" <?php if ($background_image != ""): ?>style="background-image: url(<?php echo $background_image; ?>)" <?php endif; ?>>
          <?php get_image_result(header_post_image()); ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title() ?></a>
          <!-- If the post didn't have a thumbnail / featured image, create the backup slide -->
          <div class="overlay-slide">
            <div>
              <h5 class="header-text-area">
                <i class="calendar-icon fal fa-calendar-alt"></i><?php echo get_the_date(); ?>
              </h5>
              <a href="<?php the_permalink() ?>">
                <?php $maxLen = get_field("maximum_length", "option"); ?>
                <h2 class="header-text-area"><?php the_title(); ?></h2>
              </a>
              <div>
                  <a href="<?php the_permalink()?>" class="header-text-area">Read More</a>
              </div> <!-- author -->
            </div>
          </div>
        </div>
      <?php
      endwhile;
      wp_reset_query();
      ?>
    </div>
  <?php else : ?>

  <h2>Ooops, no posts here!</h2>

  <?php endif; wp_reset_query(); ?>
</div>
