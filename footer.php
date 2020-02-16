<div class="container">			
<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
<div class="row">
     <div class="col-md-10">
				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					
				</div>
     </div>
     <div class="col-md-2">
          <div class="float-right"><p><a href="https://www.instagram.com/steal.my.soda" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
     </div>
</div>
</div>
<div class="row">
     <div class="col-md-6">
        <div class="float-left"><p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p></div>
     </div>     
     <div class="col-md-6">                                
	<div class="float-right"><p><a href="https://www.jaminspired.co.uk" target="_blank">Powered by JAM <img src="/wp-content/themes/<?php echo get_template() . '/library/images/jam-jar.png'; ?>"></a></p></div>
     </div>
</div>

			</footer>
</div>
		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
