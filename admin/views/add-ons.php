<div class="admin ajax-load-more" id="alm-add-ons">	
	<div class="wrap">
		<div class="header-wrap">
	   		<h1><?php echo ALM_TITLE; ?>: <strong><?php _e('Add-ons', 'ajax-load-more'); ?></strong></h1>
	   		<p><?php _e('Add-ons are available to extend and enhance the core functionality of Ajax Load More', 'ajax-load-more'); ?></p>  
		</div>
		<div class="cnkt-main full">
		
		   <!-- Cache -->
		   <div class="group">
			   <div class="row no-brd">
   			   <?php 
                  	$cache_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/cache/?utm_source=WP%20Admin&utm_medium=ALM%20Add-ons&utm_campaign=Cache'; ?>
                  	
               <a href="<?php echo $cache_url; ?>">
   			      <div class="expand-wrap">
                     <img src="<?php echo ALM_ADMIN_URL; ?>img/add-ons/cache-add-on.jpg">                         
                     <h2 class="addon-title"><?php _e('Cache', 'ajax-load-more'); ?></h2>
                     <p class="addon-intro"><?php _e('Improve performance with the Ajax Load More caching engine.', 'ajax-load-more'); ?></p>
                     <p><?php _e('The Cache add-on creates static HTML files of Ajax Load More requests then delivers those static files to your visitors.', 'ajax-load-more'); ?></p>    
                     <?php
                        if (has_action('alm_cache_installed')){
                           echo '<span class="cnkt-button installed"><i class="fa fa-check-square"></i> Installed</span> ';
                        }else{
                           echo '<span class="cnkt-button"><i class="fa fa-download"></i> Purchase &amp; Install</span>';
                        }
                     ?>               
                  </div>
               </a>
			   </div>		   
             		   
		   </div>
		   <!-- End Cache -->
		   
		   
		   <!-- Custom Repeaters -->
		   <div class="group">
			   <div class="row no-brd">
   			   <?php $cr_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/custom-repeaters/?utm_source=WP%20Admin&utm_medium=ALM%20Add-ons&utm_campaign=Custom%20Repeaters'; ?>
   			   <a href="<?php echo $cr_url; ?>">
   			      <div class="expand-wrap">
                     <img src="<?php echo ALM_ADMIN_URL; ?>img/add-ons/unlimited-add-ons.jpg">      
                     <h2 class="addon-title"><?php _e('Custom Repeaters', 'ajax-load-more'); ?></h2>
                     <p class="addon-intro"><?php _e('Extend Ajax Load More with unlimited repeater templates.', 'ajax-load-more'); ?></p>
                     <p><?php _e('Create, delete and modify repeater templates as you need them with absolutely zero restrictions.', 'ajax-load-more'); ?></p>
                     <?php
                     	
                        if (has_action('alm_unlimited_installed')){
                           echo '<span class="cnkt-button installed"><i class="fa fa-check-square"></i> Installed</span> ';
                        }else{
                           echo '<span class="cnkt-button"><i class="fa fa-download"></i> Purchase &amp; Install</span>';
                        }
                     ?> 
   			      </div>	
   			   </a>
			   </div>		   
            		   
		   </div>
		   <!-- End Custom Repeaters -->	
		   
		   	   
		   
		   
		   <!-- Paging -->
		   <div class="group">
			   <div class="row no-brd">
   			   <?php
                  	$paging_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/paging/?utm_source=WP%20Admin&utm_medium=ALM%20Add-ons&utm_campaign=Paging';
      			   ?>
   			   <a href="<?php echo $paging_url; ?>">
			      <div class="expand-wrap">
                  <img src="<?php echo ALM_ADMIN_URL; ?>img/add-ons/paging-add-ons.jpg">          
                  <h2 class="addon-title"><?php _e('Paging', 'ajax-load-more'); ?></h2>
                  <p class="addon-intro"><?php _e('Extend Ajax Load More with a numbered navigation.', 'ajax-load-more'); ?></p>
                  <p><?php _e('The Paging add-on will transform the default infinite scroll functionality into a robust ajax powered navigation system.', 'ajax-load-more'); ?></p>   
                  <?php
                     if (has_action('alm_paging_installed')){
                        echo '<span class="cnkt-button installed"><i class="fa fa-check-square"></i> Installed</span> ';
                     }else{
                        echo '<span class="cnkt-button"><i class="fa fa-download"></i> Purchase &amp; Install</span>';
                     }
                  ?>             
               </div>
   			   </a>
			   </div>			   
            		   
		   </div>
		   <!-- End Paging --> 	   
		   
		   
		   <!-- Preloaded -->
		   <div class="group">
			   <div class="row no-brd">   			   
   			   <?php
      			   $preload_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/preloaded/?utm_source=WP%20Admin&utm_medium=ALM%20Add-ons&utm_campaign=Preloaded';
      			   ?>
   			   <a href="<?php echo $preload_url; ?>">
   			      <div class="expand-wrap">
                     <img src="<?php echo ALM_ADMIN_URL; ?>img/add-ons/preloaded-add-ons.jpg">  
                     <h2 class="addon-title"><?php _e('Preloaded', 'ajax-load-more'); ?></h2>
                     <p class="addon-intro"><?php _e('Load an initial set of posts before making Ajax requests to the server.', 'ajax-load-more'); ?></p>
                     <p><?php _e('The Preloaded add-on will display content quicker and allow caching of the initial query which can reduce stress on your server.', 'ajax-load-more'); ?></p>        	   
                     <?php
                        if (has_action('alm_preload_installed')){
                           echo '<span class="cnkt-button installed"><i class="fa fa-check-square"></i> Installed</span> ';
                        }else{
                           echo '<span class="cnkt-button"><i class="fa fa-download"></i> Purchase &amp; Install</span>';
                        }
                     ?>            
                  </div>
   			   </a>
			   </div>				   
		   </div>
		   <!-- End Preloaded --> 
		   
		   
		   <!-- Previous Post -->
		   <div class="group">
			   <div class="row no-brd">   			   
   			   <?php
      			   $prev_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/previous-post/?utm_source=WP%20Admin&utm_medium=ALM%20Add-ons&utm_campaign=Previous Post';
      			?>
   			   <a href="<?php echo $prev_url; ?>">
   			      <div class="expand-wrap">
                     <img src="<?php echo ALM_ADMIN_URL; ?>img/add-ons/prev-post-add-on.jpg">  
                     <h2 class="addon-title"><?php _e('Previous Post', 'ajax-load-more'); ?></h2>
                     <p class="addon-intro"><?php _e('An extension to enable infinite scrolling of single posts.', 'ajax-load-more'); ?></p>
                     <p><?php _e('The Previous Post add-on will load single posts as you scroll and update the browser URL to the current post.', 'ajax-load-more'); ?></p>        	   
                     <?php
                        if (has_action('alm_prev_post_installed')){
                           echo '<span class="cnkt-button installed"><i class="fa fa-check-square"></i> Installed</span> ';
                        }else{
                           echo '<span class="cnkt-button"><i class="fa fa-download"></i> Purchase &amp; Install</span>';
                        }
                     ?>            
                  </div>
   			   </a>
			   </div>				   
		   </div>
		   <!-- End Previous Post --> 
		   
		   
		   <!-- SEO -->
		   <div class="group">
			   <div class="row no-brd">
   			   <?php
      			   $seo_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/search-engine-optimization/?utm_source=WP%20Admin&utm_medium=ALM%20Add-ons&utm_campaign=SEO';
      			   ?>
   			   <a href="<?php echo $seo_url; ?>">
   			      <div class="expand-wrap">
                     <img src="<?php echo ALM_ADMIN_URL; ?>img/add-ons/seo-add-ons.jpg"> 
                     <h2 class="addon-title"><?php _e('Search Engine Optimization', 'ajax-load-more'); ?></h2>
                     <p class="addon-intro"><?php _e('Generate unique paging URLs with every Ajax Load More query.', 'ajax-load-more'); ?></p>
                     <p><?php _e('The SEO add-on will optimize your ajax loaded content for search engines by generating unique URLs with every query.</p>', 'ajax-load-more'); ?></p>    
                     <?php
                     	
                        if (has_action('alm_seo_installed')){
                           echo '<span class="cnkt-button installed"><i class="fa fa-check-square"></i> Installed</span> ';
                        }else{
                           echo '<span class="cnkt-button"><i class="fa fa-download"></i> Purchase &amp; Install</span>';
                        }
                     ?>                  
                  </div>
   			   </a>
			   </div>			   
            		   
		   </div>
		   <!-- End SEO -->
		   
		   
		   <!-- Theme Repeaters -->
		   <div class="group">
			   <div class="row no-brd">
			      <?php $themer_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/theme-repeaters/?utm_source=WP%20Admin&utm_medium=ALM%20Add-ons&utm_campaign=Theme Repeaters'; ?>
			      <a href="<?php echo $themer_url; ?>">
			         <div class="expand-wrap">
                     <img src="<?php echo ALM_ADMIN_URL; ?>img/add-ons/theme-repeater-add-on.jpg"> 
                     <h2 class="addon-title"><?php _e('Theme Repeaters', 'ajax-load-more'); ?></h2>
                     <p class="addon-intro"><?php _e('Manage repeater templates within your current theme directory.', 'ajax-load-more'); ?></p>
                     <p><?php _e('The Theme Repeater add-on will allow you load, edit and maintain templates from your current theme directory.</p>', 'ajax-load-more'); ?></p>    
                     <?php
                     	
                        if (has_action('alm_theme_repeaters_installed')){
                           echo '<span class="cnkt-button installed"><i class="fa fa-check-square"></i> Installed</span> ';
                        }else{
                           echo '<span class="cnkt-button"><i class="fa fa-download"></i> Purchase &amp; Install</span>';
                        }
                     ?>                
                  </div>
   			   </a>  
			   </div>			   
            		   
		   </div>
		   <!-- End Theme Repeaters -->
		   
		   
		   <!-- Layouts -->
		   <div class="group" style="display: none !important;">
			   <div class="row no-brd">
   			   <?php
                  $layouts_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/layouts/?utm_source=WP%20Admin&utm_medium=ALM%20Add-ons&utm_campaign=Layouts';
      			?>
   			   <a href="<?php echo $layouts_url; ?>">
			      <div class="expand-wrap">
                  <img src="<?php echo ALM_ADMIN_URL; ?>img/add-ons/paging-add-ons.jpg">          
                  <h2 class="addon-title"><?php _e('Layouts', 'ajax-load-more'); ?></h2>
                  <p class="addon-intro"><?php _e('Extend Ajax Load More with predefined responsive layouts.', 'ajax-load-more'); ?></p>
                  <p><?php _e('Boost the look of your theme with a library of mobile ready layouts.', 'ajax-load-more'); ?></p>   
                  <?php
                     if (has_action('alm_layouts_installed')){
                        echo '<span class="cnkt-button installed"><i class="fa fa-check-square"></i> Installed</span> ';
                     }else{
                        echo '<span class="cnkt-button"><i class="fa fa-download"></i> Purchase &amp; Install</span>';
                     }
                  ?>             
               </div>
   			   </a>
			   </div>        		   
		   </div>
		   <!-- End Layouts --> 
		   
	   </div>	   
	   
		<div class="call-out light">
		   <p><?php _e('All add-ons are installed as stand alone plugins and with a valid license key will receive plugin update notifications directly within the <a href="plugins.php">WordPress plugin dashboard</a>.', 'ajax-load-more'); ?></p>
   	</div>   
	   	
	</div>
</div>