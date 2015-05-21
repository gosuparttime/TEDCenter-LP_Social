<?php 
//
// Template Name: Home Page
//
get_header(); ?>
<div id="content" class="clearfix">
  <div id="main" class="span12 clearfix" role="main">
    <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
      <header>
        <h2 class="page-title" itemprop="headline">
          <?php the_field('lead_in'); ?>
        </h2>
      </header>
      <!-- end article header -->
      
      <section class="post_content clearfix lead" itemprop="articleBody">
        <div class="row-fluid">
        	<?php the_field('top_content');?>
        </div>
      </section>
      <!-- end article section -->
    </article>
    <!-- end article -->
    <?php endwhile; ?>
  </div>
  <div class="clear"></div>
  <div id="tabs" class="pad-one-tb clearfix" role="main">
  
  <ul class="nav nav-pills clearfix row-fluid" id="tabs" role="navigation">
    <?php 
	$query = new WP_Query( 
	$args = array(
		'posts_per_page' => '-1',
		'post_type' => 'custom_type',
		'order' => 'ASC',
    ) );
	$query = new WP_Query($args);
	while ($query->have_posts()) : $query->the_post(); ?>
    <? $postCount = $query->post_count;
		echo '<li class="';
	 	if ($postCount == "2"){
			echo 'span6';
	 	} else if ($postCount == "3"){
			echo 'span4';
	 	} else {
			echo 'span3';
	 	}
    	echo '">';
        ?><a href="#post<?php the_ID(); ?>" data-toggle="tab"><h4><?php the_title(); ?></h4><span class="hidden-phone"><strong><?php echo get_field('add_detail'); ?></strong></span></a></li>
    
	<?php endwhile;?>
    </ul>
    <div class="tab-content row-fluid" id="myTabContent">
	<?php while ($query->have_posts()) : $query->the_post(); ?>
    
    	<div id="post<?php the_ID(); ?>" class="well tab-pane fade">
    	<div <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			<div class="row-fluid">
            	<h3><?php the_title(); ?>: <span class="orange-text"><?php echo get_field('add_detail'); ?></span></h3>
            </div>
            <div class="column_content row-fluid clearfix" itemprop="articleBody">
        	<div class="span6">	
				<?php echo get_field('l_content'); ?>
            </div>
            <div class="span6">
				<?php echo get_field('r_content'); ?>
            </div>
            </div>
            <?php if (get_field('f_content')):
				echo '<div class="twelve columns">';
				the_field('f_content');
				echo '</div>';
		    endif;?>
            <a class="visible-phone mar-one-t" href="#tabs">Back to Navigation <i class="icon-arrow-up"></i></a>
    	</div>
    	</div>
    
    <!-- end article -->
    <?php endwhile; ?>
    </div>
    
    <?php wp_reset_postdata(); ?>
  </div>
  <section class="post_content clearfix" itemprop="articleBody">
        <div class="row-fluid">
        	<div class="span6">
            	<?php get_sidebar(); // sidebar 1 ?>
                <p><?php echo get_field('location_text'); ?></p>
                
            </div>
            <div class="span6">
            <?php 
			$any_title = get_field('action_call');
			$any_link = get_field('registration_url');
			$any_button = 'button text="';
			$any_button .= $any_title;
			$any_button .= '" url="';
			$any_button .= $any_link;
			$any_button .= '" ';
			$any_button .='" color="info" ';
			$any_button .='" blank="true" ';
			$any_button .='" size="large"';
			echo do_shortcode('['.$any_button.']');
			?>
            <div class="row-fluid pad-one-b">
  				<p><?php echo get_field('registration_content'); ?></p>
  			</div>
            </div>
        </div>
      </section>
      <div class="white-bar pad-one-tb mar-one-t"></div>
  <!-- end #main --> 
</div>
<!-- end #content -->

<?php get_footer(); ?>
