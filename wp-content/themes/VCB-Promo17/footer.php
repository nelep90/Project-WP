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
                    <p><a href="<?php echo esc_url('http://localhost/wordpress/'); ?>"><?php _e('VCB ', 'VCB-Promo17'); ?></a> <?php _e('copyright ', 'Nenad'); ?><a href="http://www.wordpress.org"><?php _e(' Nenad', 'novellite'); ?></a></p>
					<?php } ?>
                    
                    <img class="footer_lg" src="http://localhost/wordpress/wp-content/uploads/2018/07/logo_defaut.png" />
                    <img class="footer_lg" src="http://localhost/wordpress/wp-content/uploads/2018/07/logo_ACS_slide.png" />
                
			                </div>
                    </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>