</div>
<footer class="footer-area">  
   <div class="container"> 
		<?php do_action('expert_healthcare_footer_above'); 
			if ( is_active_sidebar( 'expert-healthcare-footer-widget-area' ) ) { ?>	
			<div class="row footer-row"> 
				<?php dynamic_sidebar( 'expert-healthcare-footer-widget-area' ); ?>
			</div>  
		<?php } ?>
	</div>
	
	<?php 
		$footer_copyright = get_theme_mod('footer_copyright','');
	?>
	<div class="copy-right"> 
		<div class="container">
			<p class="copyright-text">	
				<?php
					echo esc_html( apply_filters('expert_healthcare_footer_copyright',($footer_copyright)));
			    ?>
				<?php if($footer_copyright == "") { ?>
					<?php
						echo esc_html('Copyright &copy; 2023,');
						echo esc_html(' Expert Healthcare');
					?>
					<span> | </span>
					<a href="https://wordpress.org/">
						<?php
						   echo esc_html( 'WordPress Theme');
						?>
					</a>
				<?php } ?>
			</p>
		</div>
	</div>
	<?php $expert_healthcare_scroll_top = get_theme_mod('expert_healthcare_scroll_top_setting','1');
      if($expert_healthcare_scroll_top == '1') { ?>
		<a id="scrolltop"><span>TOP<span></a>
	<?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
