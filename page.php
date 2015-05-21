<?php get_header(); ?>
<div id="content" class="clearfix">
  <div id="main" class="span12 clearfix" role="main">
    <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
      <header>
        <h2 class="page-title" itemprop="headline">
          <?php the_title(); ?>
        </h2>
      </header>
      <!-- end article header -->
      
      <section class="post_content clearfix lead" itemprop="articleBody">
        <?php the_content(); ?>
      </section>
      <!-- end article section -->
    </article>
    <!-- end article -->
    <?php endwhile; ?>
  </div>

  <div id="tabs" role="main">
  
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
    
    	<li class="span3"><a href="#post<?php the_ID(); ?>" data-toggle="tab"><h4><?php the_title(); ?></h4><span class="hidden-phone"><strong><?php echo get_field('add_detail'); ?></strong></span></a></li>
    
	<?php endwhile;?>
    </ul>
    <div class="tab-content row-fluid" id="myTabContent">
	<?php while ($query->have_posts()) : $query->the_post(); ?>
    
    	<div id="post<?php the_ID(); ?>" class="well tab-pane fade">
    	<div <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			<div class="row-fluid">
            	<h3><?php the_title(); ?></h3>
            	<h4><?php echo get_field('add_detail'); ?></h4>
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
  <!-- end #main --> 
</div>
<!-- end #content -->

<?php get_footer(); ?>
