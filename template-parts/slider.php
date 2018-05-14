<div class="main-slider">
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

      <?php while ($recent_posts->have_posts() ) : $recent_posts->the_post() ?>

      <div class="slick-slide heading-image" style="background-image: url(<?php echo header_post_image(); ?>)">
        <?php get_image_result(header_post_image()); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title() ?></a>

        <?php
        if(has_post_thumbnail()):

          $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hero-header', false);
          $imgwidth = $imgdata[1];
          $wanted_width = 1600;
        endif
        ?>

        <div class="overlay-slide">
          <div>
            <h5 class="header-text-area">
              <i class="calendar-icon fal fa-calendar-alt"></i><?php echo get_the_date(); ?>
            </h5>
            <a href="<?php the_permalink() ?>">
              <?php $maxLen = get_field("maximum_length", "option"); ?>
              <h2 class="header-text-area"><?php title_trim(get_the_title(), get_field("maximum_length", "option"), isset($maxLen)); ?></h2>
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
