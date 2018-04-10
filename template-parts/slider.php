<?php

  $args = array(

      'post_type' => 'post',
      'posts_per_page' => 4,
      'meta_query' => array(
                      array(
      'compare' => 'EXISTS'
      ),)
  );

  $home_work_posts = new WP_Query( $args );

  if ( $home_work_posts->have_posts() ) : ?>

    <div class="hero-header ">

    <?php while ( $home_work_posts->have_posts() ) : $home_work_posts->the_post() ?>

      <div class="slick-slide heading-image" style="background-image: url(<?php echo header_post_image();?>)">
        <?php get_image_result(header_post_image()); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a>

        <?php if (has_post_thumbnail()) : ?>

          <?php
            $imgdata = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID ), 'hero-header',false);

            $imgwidth = $imgdata[1];
            $wanted_width = 1600;
          ?>

        <?php endif; ?>

        <div class="overlay-slide item">
            <div class="item-text">
              <h5 class="brighter">
                <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                  echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                }?>
              </h5>
              <a href="<?php the_permalink()?>">
                <h2 class="esc"><?php the_title();?></h2>
              </a>
              <div class="readmore ">
                  <a class="animated" href="<?php the_permalink()?>">Read More</a>
                </p>
							</div> <!-- author -->
            </div> <!-- item-text -->
          </div> <!-- post -->
        </div> <!-- item -->

    <?php endwhile ?>

</div><!-- hero-header-->

<?php else : ?>

<h2>Ooops, no posts here!</h2>

<?php endif; wp_reset_query(); ?>
