
	<div class="delicious-posts" >

 		<div class="container">

			<div class="delicious-title">

				<img src="../wp-content/themes/Perso simon-harajuku/images/DeliciousPosts.png" class="" alt="" style="">
			
			</div>

			<div class="social-content">
	
				<?php 
					$args = array(
		        		'post_type' => array('instagram_posts', 'post'),
		    		 );

		    		 $testPosts = new WP_Query( $args ); ?>

				<?php 	
					if ( $testPosts->have_posts() ) : while ( $testPosts->have_posts() ) : $testPosts->the_post();?>


				<div class="sns-posts col-lg-3 col-md-3 col-sm-4 col-xs-6">
					<ul class="post-box">
						<li>
							<a style="" href="" rel="bookmark"><?php the_post_thumbnail(); ?></a>
						</li>

						<li class="title-box">	
							<p><a style="" href="" rel="bookmark"><?php the_title(); ?></a></p>
						</li>
						
						<li>
							<div class="date-box">
								<div class="col-sm-6 col-xs-6" id="date-category" style="">
									<p style="float: right;margin-bottom: 0;"><?php echo get_the_date();?></p>
								</div> 

								<div class="col-sm-6 col-xs-6" style="">
									<?php the_category(); ?>
								</div>

							</div>

						</li>	
	
						<li>

							<?php
								$content = strip_tags($post->post_content);
								$ptn = '/Source: Tumblr$/';
								$content = preg_replace($ptn, '', $content);
								if($content != ''):
							?>

							<div class="content-box">
								<a style="" href="" rel="bookmark"><?php echo $content; ?></a>	
							</div>

							<?php endif; ?>

						</li>
					</ul>
				</div>	

				<?php endwhile; else : ?>
				<?php endif;

				wp_reset_postdata(); ?>

				<div class="sns-posts col-lg-3 col-md-3 col-sm-4 col-xs-6" style="" id="delicious-image">
					<div class="post-box"><img src="../wp-content/themes/Perso simon-harajuku/images/IMG_4357-social.png" alt="" style=""></div>
				</div>
<script>
$(window).on('load', function(){
	$('.post-box').tile(4);
})
</script>

			</div>
		</div>	
	</div>		
</div>


<script src="<?php echo plugins_url('archives-calendar-widget/admin/js/jquery.arcw-init.js'); ?>" type="text/javascript" charset="utf-8"></script>

<script >$('.head-slider').slick();</script>

<?php get_footer(); ?>
