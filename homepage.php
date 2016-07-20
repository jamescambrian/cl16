<?php
$catquery = new WP_Query( 'category_name=featured&posts_per_page=1' );
while($catquery->have_posts()) : $catquery->the_post();
?>
<!-- Featured Post Begins -->
<div class="post__large fade-in-element">
  <a href="<?php the_permalink(); ?>">
    <?php $featsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
    <div class="post__large--feat post__large--feat-img" style="background:url('<?php echo $featsrc[0]; ?>')">
    </div>
  </a>
  <div class="post__large--feat">
    <div class="post__large--excerpt">
      <h2><a href="<?php the_permalink(); ?>" class="titles"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
      <a class="button button-read-more button-read-more-feat hvr-sweep-to-right " href="<?php the_permalink(); ?> ">read more</a>
    </div>
  </div>
  <br class="u-cf"/>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<!-- Featured Post ends -->
<!-- Radio Section Begins -->
 <div class="color-wrap color-wrap--deep-purple">
  <div class="container">
    <div class="row wrap-title"><img class="logo-small" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png"><h2>Latest Radio</h2><br><span><a class="see-more" href="<?php echo site_url(); ?>/category/radio/">See all Radio shows</a></span></div>
  <div class="row cover-list">
    <ul class="podcast-covers">
      <?php
      $catquery = new WP_Query( 'category_name=radio&posts_per_page=3' );
      while($catquery->have_posts()) : $catquery->the_post();
      ?>
      <li class="one-third column fade-in-element">
        <figure>
            <?php the_post_thumbnail( 'full', array( 'class' => 'u-full-width' ) ); ?>
            <figcaption><!--  <span class="button-play"></span><br>  -->
              <span class="showtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><span class="showtitle__dj"><?php $key="Artist"; echo get_post_meta($post->ID, $key, true); ?></span>
            </figcaption>
        </figure>
      </li>
     <?php endwhile; ?>
     <?php wp_reset_query(); ?>
    </ul>
  </div>
</div>
</div>
<br class="u-cf"/>
<?php
$catquery = new WP_Query( 'category_name=releases&posts_per_page=1' );
while($catquery->have_posts()) : $catquery->the_post();
?>
<!-- Featured Post Begins -->
<div class="post__large fade-in-element">
  <a href="<?php the_permalink(); ?>">
    <?php $featsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
    <div class="post__large--feat post__large--feat-img" style="background:url('<?php echo $featsrc[0]; ?>')">
    </div>
  </a>
  <div class="post__large--feat">
    <div class="post__large--excerpt">
      <h2><a href="<?php the_permalink(); ?>" class="titles"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
      <a class="button button-read-more button-read-more-feat hvr-sweep-to-right " href="<?php the_permalink(); ?> ">read more</a>
    </div>
  </div>
  <br class="u-cf"/>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<!-- Featured Post ends -->

