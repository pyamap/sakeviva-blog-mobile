		<?php do_action( 'wptouch_body_bottom' ); ?>

		<?php get_template_part( 'footer-top' ); ?>

		<?php if ( !is_front_page() ) { ?>
			<a href="#" class="back-to-top"><?php _e( 'Back to top', 'wptouch-pro' ); ?></a>
		<?php } ?>

		<div class="<?php wptouch_footer_classes(); ?>">
			<?php wptouch_footer(); ?><p>Powered by Jojima Sakemedia</p>
		</div>

		<?php do_action( 'wptouch_language_insert' ); ?>

		<!--デスクトップかモバイルか選択させるボタン<?php get_template_part( 'switch-link' ); ?>-->
	</dv><!-- content wrap -->
	</div><!-- page wrapper -->
</body>
</html>
