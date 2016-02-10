<section class="entry-content">
<?php $featsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
	<div class="post__feat-img fade-in-element" style="background:url('<?php echo $featsrc[0]; ?>')"></div>
	<div class="container">
		<div class="nine columns post fade-in-element">
			<div class="row">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				   <div class="row">
              <ul class="social-shares">
                <li><a href="http://www.facebook.com/sharer.php" class="popup">
                  <svg viewBox="-450 251.1 58.9 58.9" style="enable-background:new -450 251.1 58.9 58.9;" xml:space="preserve"><g id="icon__facebook" class="icon__facebook--dark"> <path d="M-420.6,310c-16.2,0-29.4-13.2-29.4-29.5c0-16.3,13.2-29.4,29.4-29.4c16.2,0,29.4,13.2,29.4,29.4 C-391.2,296.7-404.3,310-420.6,310z M-420.6,253.3c-15,0-27.2,12.2-27.2,27.2s12.2,27.2,27.2,27.2s27.2-12.2,27.2-27.2 S-405.6,253.3-420.6,253.3z"/> <path id="Facebook_1_"d="M-407.1,292.1c0,0.8-0.7,1.5-1.5,1.5h-7v-10.5h3.6l0.5-4.1h-4.1v-2.6c0-1.2,0.3-2,2-2h2.2 v-3.7c-0.4-0.1-1.6-0.1-3.2-0.1c-3.1,0-5.3,1.9-5.3,5.4v3.1h-3.6v4h3.6v10.6H-433c-0.8,0-1.5-0.7-1.5-1.5v-24.4 c0-0.8,0.7-1.5,1.5-1.5h24.4c0.8,0,1.5,0.7,1.5,1.5V292.1L-407.1,292.1z"/></g></svg>
                </a>
                </li>
                <li><a href="http://twitter.com/share" class="popup">
                  <svg viewBox="-450 251.1 58.9 58.9" style="enable-background:new -450 251.1 58.9 58.9;" xml:space="preserve"><g id="icon__twitter" class="icon__twitter--dark"><path d="M-407.7,269.2c-1.1,0.7-2.3,1.2-3.7,1.4c-1-1.1-2.5-1.9-4.2-1.9c-3.1,0-5.7,2.6-5.7,5.9 c0,0.4,0.1,0.9,0.1,1.3c-4.8-0.2-8.9-2.6-11.8-6.1c-0.5,0.9-0.7,1.9-0.7,3c0,2,1,3.8,2.5,4.9c-1,0-1.8-0.3-2.6-0.7v0.1 c0,2.8,1.9,5.2,4.6,5.7c-0.4,0.1-1,0.2-1.5,0.2c-0.4,0-0.7,0-1-0.1c0.7,2.3,2.8,4,5.4,4.1c-1.9,1.6-4.4,2.5-7.1,2.5 c-0.4,0-0.9,0-1.3-0.1c2.5,1.6,5.5,2.6,8.8,2.6c10.5,0,16.3-8.9,16.3-16.7c0-0.2,0-0.5,0-0.7c1.1-0.8,2.1-1.9,2.8-3.1 c-1,0.4-2.2,0.8-3.3,0.9C-409,271.7-408.1,270.5-407.7,269.2z"/><path d="M-420.6,310c-16.2,0-29.4-13.2-29.4-29.5c0-16.3,13.2-29.4,29.4-29.4c16.2,0,29.4,13.2,29.4,29.4 C-391.2,296.7-404.3,310-420.6,310z M-420.6,253.3c-15,0-27.2,12.2-27.2,27.2s12.2,27.2,27.2,27.2s27.2-12.2,27.2-27.2 S-405.6,253.3-420.6,253.3z"/></g></svg>
                </a></li>
                <li><a href="https://plus.google.com/share?url=http://example.com" class="popup">
                  <svg viewBox="-450 251.1 58.9 58.9" style="enable-background:new -450 251.1 58.9 58.9;" xml:space="preserve"><g id="icon__gplus" class="icon__gplus--dark"><path d="M-420.6,310c-16.2,0-29.4-13.2-29.4-29.5c0-16.3,13.2-29.4,29.4-29.4c16.2,0,29.4,13.2,29.4,29.4 C-391.2,296.7-404.3,310-420.6,310z M-420.6,253.3c-15,0-27.2,12.2-27.2,27.2s12.2,27.2,27.2,27.2s27.2-12.2,27.2-27.2 S-405.6,253.3-420.6,253.3z"/> <path d="M-426.3,278.4v3.8c0,0,3.7,0,5.1,0c-0.8,2.5-2.1,3.8-5.1,3.8c-3.1,0-5.6-2.5-5.6-5.7c0-3.2,2.5-5.7,5.6-5.7 c1.6,0,2.8,0.6,3.7,1.4c0.8-0.8,0.7-0.9,2.7-2.8c-1.7-1.6-3.9-2.5-6.4-2.5c-5.3,0-9.5,4.2-9.5,9.5c0,5.3,4.2,9.5,9.5,9.5 c7.9,0,9.8-6.9,9.2-11.5L-426.3,278.4L-426.3,278.4z"/><polygon points="-409.1,278.6 -409.1,275.2 -411.4,275.2 -411.4,278.6 -414.8,278.6 -414.8,281 -411.4,281 -411.4,284.3 -409.1,284.3 -409.1,281 -405.7,281 -405.7,278.6 "/></g></svg>
                </a>
                </li>
              </ul>
            </div>
			</div>
		</div>
	</div>

</div>

</section>