<?php $back_to_top = get_theme_mod('novellite_backtotop_disable','0');?>
<input type="hidden" id="back-to-top" value="<?php echo $back_to_top?>"/> 
<div class="outer-footer">
<div class="container">
<div class="footer-widget-area">
        <?php
        /* A sidebar in the footer? Yep. You can can customize
         * your footer with four columns of widgets.
         */
        get_sidebar('footer');
        ?>
		</div>
    </div>
	</div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<?php if (get_theme_mod('footertext','') != '') { ?>
		<span class="copyright"><?php echo esc_html(get_theme_mod('footertext','')); ?></span> 
			<?php } else { ?>
                    <p><a href="<?php echo esc_url('http://www.themehunk.com'); ?>"><?php _e('Copyright', 'Nenad Pasajlic'); ?></a> <?php _e('Nenad Pasajlic ', 'ovellite'); ?><a href="http://www.wordpress.org"><?php _e('VCB', 'VCB'); ?></a></p>
                    <?php } ?>
                    <a href="#"><img src="/images/logo_ACS_slide.png" width="145" height="32" /></a>
                    <img src="<?php bloginfo('template_url');?>/images/logo_defaut.png" alt="Logo"/>                   
  
			                </div>
                    </div>
                   
   
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>