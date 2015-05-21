<div id="sidebar1" class="row-fluid" role="complementary">
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <?php
$query = new WP_Query( 
	$args = array(
		'posts_per_page' => '-1',
		'post_type' => 'slide',
		'order' => 'ASC',
    ) );
	$slideCount = 0;
	$query = new WP_Query($args);
	while ($query->have_posts()) : $query->the_post();
	if ($slideCount == 0){
		$myClass = "item active clearfix";
	}else{
		$myClass = "item clearfix";
	}
	echo '<div class="'.$myClass.'">';
	echo '<div class="icon-item clearfix"><img class="clearfix" src="';
	echo get_bloginfo( 'stylesheet_directory' );
	echo '/images/fc-webicon-'.get_field('icon_1').'.gif" alt="'.get_field('icon_1').' logo"> </div>';
	echo '<div class="icon-item clearfix"><img class="clearfix" src="';
	echo get_bloginfo( 'stylesheet_directory' );
	echo '/images/fc-webicon-'.get_field('icon_2').'.gif" alt="'.get_field('icon_2').' logo"> </div>';
	echo '<div class="icon-item clearfix"><img class="clearfix" src="';
	echo get_bloginfo( 'stylesheet_directory' );
	echo '/images/fc-webicon-'.get_field('icon_3').'.gif" alt="'.get_field('icon_3').' logo"> </div>';
	echo '<div class="icon-item clearfix"><img class="clearfix" src="';
	echo get_bloginfo( 'stylesheet_directory' );
	echo '/images/fc-webicon-'.get_field('icon_4').'.gif" alt="'.get_field('icon_4').' logo"> </div>';
	echo '</div>';
	$slideCount++;
	endwhile;

wp_reset_postdata(); ?>
    </div>
  </div>
</div>
