<?php if(has_post_thumbnail()): ?>
<div class="hero-header">
  <div class="slick-slide heading-image" style="background-image: url(<?php echo header_post_image() ?>)">

  <?php
  global $post;
  if(has_post_thumbnail()) {
    $imgdata = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero-header', false);
    $imgwidth = $imgdata[1];
    $wanted_width = 1600;
  }
  ?>
  <div class="overlay-slide">
    <div>
      <h3 class="header-text-area"><i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('F jS, Y') ?></time></h3>
      <a href="<?php the_permalink() ?>">
        <h2 class="header-text-area"><?php the_title(); ?></h2>
      </a>
    </div>
  </div>
  </div>
</div>
<?php else: ?>

  <div class="title-container maximum-width-title">
    <i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('jS F, Y') ?></time>
    <?php the_title( '<h1 class="page-title__inner posted">', '</h1>' ); ?>
  </div>

<?php endif; ?>
