
<footer id="footer" role="contentinfo">

  <div class="row-fluid pad-two-b"  id="get-social-workshops" role="complementary">
  		<?php //the_field('footer_info', 'option'); ?>
		<?php 
			if (get_field('additional_workshops', 'option')){
				echo '<h3 class="orange-text">';
				echo get_field('additional_workshops', 'option');
				echo '</h3>';
			}
			if (get_field('additional_workshop_text', 'option')){
				the_field('additional_workshop_text', 'option');
			}
			$any_linked = get_field('social_workshops', 'option');
			$result = count($any_linked);
			
			if ($result == 2){
				$myspan = "span6";
			}
			else {
				$myspan = "span4";
			}
			$mycount = 0;
			foreach( $any_linked as $any):
			if ($mycount == "0" ){
				echo '<div class="row-fluid pad-one-b">';
			}
			echo '<div class="'.$myspan.'">';
			$any_link = $any['get_social_workshop_url'];
			$any_title = $any['get_social_workshop_name'];
			$any_button = 'button text="';
			$any_button .= $any_title;
			$any_button .= '" url="';
			$any_button .= $any_link;
			$any_button .= '" ';
			$any_button .='" color="info" ';
			$any_button .='" blank="true" ';
			$any_button .='" size="default"';
			echo do_shortcode('['.$any_button.']');
			echo '</div>';
			$mycount++;
			if ($mycount == "3"){
				echo '</div>';
				$mycount = 0;
			}				
		endforeach; 
		echo '</div>';
		?>
        	
        </div>
		
  <div id="inner-footer">
  <div class="row-fluid">
  	<div class="span3 mar-two-t-neg pull-right" id="su-seal"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/SU-seal.png" alt="Syracuse University" /><span class="hide">Syracuse University</span></div>
    <div class="span9 orange-bar alpha pull-left">
      <div class="row-fluid">
        <div class="span8">
          <div class="row-fluid">
            <div class="span4"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/TEDCenter.png" alt="TEDCenter at Syracuse University" /><span class="hide">TEDCenter at Syracuse University</span></div>
            <div class="span8">
              <h5>Talent & Education Development Center</h5>
              <p>at <a href="http://uc.syr.edu" target="_blank">University College</a><br />
                Syracuse University<br />
                700 University Ave<br />
                Syracuse NY 13244-2530<br />
                </p>
                <ul class="unstyled">
                	<li><strong>Phone: </strong>315-443-5241</li>
					<li><strong>Email: </strong><a href="mailto:tedctr@syr.edu" title="Email the TEDCenter">tedctr@syr.edu</a></li>
                	<li><strong>Web: </strong><a href="http://tedcenter.syr.edu">http://tedcenter.syr.edu</a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="span4">
          <h5>Follow the TEDCenter</h5>
          <ul class="inline">
            <!--<li><a class="fc-webicon facebook" href="https://www.facebook.com/syracusetedcenter" target="_blank"></a></li>-->
            <li><a class="fc-webicon facebook" href="https://www.facebook.com/UniversityCollegeSU" target="_blank"></a></li>
            <li><a class="fc-webicon twitter" href="https://twitter.com/tedctr" target="_blank"></a></li>
            <li><a class="fc-webicon linkedin" href="http://www.linkedin.com/e/-pvio40-hfoaln1s-5r/vgh/4966620/eml-grp-sub/?hs=false&tok=3rWIJtJJeiu5I1" target="_blank"></a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
  </div>
  
</footer>
<!-- end footer -->

</div>
<!-- end #container -->
</div>

<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>
</body></html>