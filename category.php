<?php get_header(); ?>
<!-- Featured Post Begins -->
  <div class="post__feat-img fade-in-element" style="background:url('http://41.media.tumblr.com/tumblr_lekmxvU5c81qcu97io1_1280.jpg')">
</div>
<section class="container" id="content" role="main">
	<div class="nine columns post fade-in-element">
<!-- 		<div class="row category-page__feat">
			        <h2>Latest Release: A Track</h2>
       					 <p>It is spring, moonless night in the small town, starless
      						and bible-black, the cobblestreets silent and the hunched,
						      
            </div> -->



<?php $count = 0;
if (have_posts()) :while (have_posts()) : the_post(); 
$count++;
if( $count == 1 && $paged == 0 ){
	echo '<div class=';
	echo '"row category-page__feat"';
	echo "><h2>";
	echo the_title();
	echo "</h2>";
	echo the_content();
	echo "</div>";
}
else{
	echo '<div class=';
	echo '"one-third column covers"';
	echo ">";
	echo the_post_thumbnail('500,500', array( 'class' => 'u-full-width' ));
	echo "</div>";
}
?> 

<?php endwhile; endif; ?>

<?php next_posts_link(); ?> 
<?php previous_posts_link(); ?> 

	</div>

</div>

</section>
<?php get_footer(); ?>