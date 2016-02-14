<?php get_header(); ?>
<!-- Featured Post Begins -->



<section id="content" role="main" class="fuller">
<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();{
	echo '<div class="one-third column covers">';
	the_post_thumbnail('500,500', array( 'class' => 'u-full-width' )) ;
	echo'<div class="post__excerpt"><h2>'; 
	the_title();
	echo '</h2>';
	echo '<p>';
	echo  get_excerpt(140);
	echo '</p></div>';
	echo "</div>";

}
?>  

<?php endwhile; endif; ?>
</div>
<div class="row">
<?php next_posts_link(); ?> 
<?php previous_posts_link(); ?> 
</div>


</section>
<?php get_footer(); ?>