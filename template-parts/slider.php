<?php

  $args = array(

      'post_type' => 'post',
      'posts_per_page' => 5

  );

  $home_work_posts = new WP_Query( $args );

  if ( $home_work_posts->have_posts() ) : ?>

    <div class="hero-header ">

    <?php while ( $home_work_posts->have_posts() ) : $home_work_posts->the_post() ?>

      <div class="slick-slide">

        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a>

        <?php if (has_post_thumbnail()) : ?>

          <?php
            $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'hero-header' );

            $imgwidth = $imgdata[1];
            $wanted_width = 1600;
          ?>

          <?php if ( $imgwidth >= $wanted_width ) : ?>

            <?php default_image('hero-header');?>

          <?php else: ?>

            <?php default_image('hero-header');?>

          <?php endif; ?>

        <?php endif; ?>

      </div>    <!-- slick-slide -->

    <?php endwhile ?>

</div><!-- hero-header-->

<?php else : ?>

<h2>Ooops, no posts here!</h2>

<?php endif; wp_reset_query(); ?>
