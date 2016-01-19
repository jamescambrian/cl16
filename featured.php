<?php
$catquery = new WP_Query( 'slug=featured&posts_per_page=1' );
while($catquery->have_posts()) : $catquery->the_post();
?>
<!-- Featured Post Begins -->
<div class="post__large">
  <a href="<?php the_permalink(); ?>">
    <?php $featsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
    <div class="post__large--feat post__large--feat-img" style="background:url('<?php echo $featsrc[0]; ?>')">
    </div>
  </a>
  <div class="post__large--feat">
    <div class="post__large--excerpt">
      <h2><a href="<?php the_permalink(); ?>" class="titles"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
      <a class="button button-read-more button-read-more-feat hvr-sweep-to-right " href="<?php the_permalink(); ?> ">read more</a>
    </div>
  </div>
  <br class="u-cf"/>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<!-- Featured Post ends -->
<!-- Radio Section Begins -->
 <div class="color-wrap color-wrap--coral">
  <div class="container">
  <div class="row cover-list">
    <h2 class="underline"><a href="#">Podcasts</a></h2>
    <ul class="podcast-covers">
      <?php
      $catquery = new WP_Query( 'slug=podcasts&posts_per_page=3' );
      while($catquery->have_posts()) : $catquery->the_post();
      ?>
      <li class="one-third column fade-in-element">
        <figure>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'full', array( 'class' => 'u-full-width' ) ); ?>
            <figcaption><!--  <span class="button-play"></span><br>  -->
              <span class="showtitle"><?php the_title(); ?><br><span class="showtitle__dj"><?php $key="djname"; echo get_post_meta($post->ID, $key, true); ?></span></span>
            </figcaption>
          </a>
        </figure>
      </li>
     <?php endwhile; ?>
     <?php wp_reset_query(); ?>
    </ul>
  </div>
</div>
</div>
<br class="u-cf"/>

<main class="container main">
  <div class="twelve columns">
    <div class="row">
      <h2 class="underline"><a href="#">News</a></h2>
      <!-- START POST SECTION -->
      <section class="twelve columns">
        <?php
      $catquery = new WP_Query( 'slug=news&posts_per_page=6' );
      while($catquery->have_posts()) : $catquery->the_post();
      ?>
        <a style="display:block;" href="<?php the_permalink(); ?>">
        <article class="row post__excerpt fade-in-element">
          <div class="three columns side-titles"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
          <div class="nine columns">
             <?php the_excerpt(); ?> 
              <a class="button button-read-more hvr-sweep-to-right" href="<?php the_permalink(); ?>">read more</a>
            </div>
          </article>
        </a>
          <?php endwhile; ?>
     <?php wp_reset_query(); ?>
      </section>
    </div>
  </div>
</main>