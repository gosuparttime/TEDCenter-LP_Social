<div id="sidebar1" class="row-fluid" role="complementary">
<?php

if(get_field('program_dates')){
	echo '<h4>Available Classes</h4>';
	echo '<ul class="unstyled times">'; 
	while(has_sub_field('program_dates')):
		echo '<li>';
		echo '<strong class="orange-text">';
		the_sub_field('program_title');
		echo ': </strong>';
		$program_date = DateTime::createFromFormat('Ymd', get_sub_field('program_date'));
		echo $program_date->format('F j, Y');
		echo ', ';
		echo get_sub_field('program_start');
		echo ' &#8211; ';
		echo get_sub_field('program_end');
		echo '</li>';
	endwhile;
	echo '</ul>';  
}
else{
	echo '<p>';
	echo 'Sorry, no dates are available at this time';
	echo '</p>';
}?>
</div>
