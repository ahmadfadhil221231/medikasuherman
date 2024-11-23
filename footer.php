<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matina News
 */

?>

		</div><!-- .mt-container -->
	</div><!-- #content -->
	<?php
		/**
		 * Hook: matina_news_after_content
		 *
		 * @since 1.0.0
		 */
		do_action( 'matina_news_after_content' );

		/**
		 * Hook: matina_news_before_colophon
		 *
		 * @since 1.0.0
		 */
		do_action( 'matina_news_before_colophon' );

		// footer layout option
		$footer_layout = get_theme_mod( 'matina_news_footer_section_layout', 'layout-default' );

		switch ( $footer_layout ) {
			case 'layout-one':
				get_template_part( 'layouts/footer/layout', 'one' );
				break;
			
			default:
				get_template_part( 'layouts/footer/layout', 'default' );
				break;
		}

		/**
		 * Hook: matina_news_after_colophon
		 *
		 * @hooked - matina_news_scroll_to_top - 10
		 *
		 * @since 1.0.0
		 */
		do_action( 'matina_news_after_colophon' );

	?>
	
</div><!-- #page -->

<?php
	/**
	 * Hook: matina_news_after_page
	 *
	 * @since 
	 */
	do_action( 'matina_news_after_page' );

	wp_footer();
?>
</body>
 <div style="display: none;">
<a href="https://pafisukarame.org/">https://pafisukarame.org/</a>
<a href="https://pafijayakota.org/">https://pafijayakota.org/</a>
<a href="https://paficabangindramayu.org/">https://paficabangindramayu.org/</a>
<a href="https://paficabangjayapura.org/">https://paficabangjayapura.org/</a>
<a href="https://pafidesabumiwaras.org">https://pafidesabumiwaras.org</a>
<a href="https://pafidesarajabasa.org">https://pafidesarajabasa.org</a>
<a href="https://pafipemdalampung.org">https://pafipemdalampung.org</a>
<a href="https://pafipemdabogor.org/">https://pafipemdabogor.org/</a>
<a href="https://pafipemkotriau.org/">https://pafipemkotriau.org/</a>
<a href="https://pafipcmaluku.org/">https://pafipcmaluku.org/</a>
<a href="https://paficabangpadang.org/">https://paficabangpadang.org/</a>
<a href="https://paficabangjambi.org/">https://paficabangjambi.org/</a>
<a href="https://paficabangserang.org/">https://paficabangserang.org/</a>
<a href="https://paficabangmanado.org/">https://paficabangmanado.org/</a>
<a href="https://paficabangsorong.org/">https://paficabangsorong.org/</a>
<a href="https://pafipemdajakarta.org/">https://pafipemdajakarta.org/</a>
<a href="https://paficabangsumatera.org/">https://paficabangsumatera.org/</a>
<a href="https://paficabangmataram.org/">https://paficabangmataram.org/</a>
<a href="https://paficabangdemak.org/">https://paficabangdemak.org/</a>
<a href="https://paficabangcimahi.org/">https://paficabangcimahi.org/</a>
<a href="https://paficabangdumai.org/">https://paficabangdumai.org/</a>
<a href="https://paficabangkaro.org/">https://paficabangkaro.org/</a>
<a href="https://paficabangkarimun.org/">https://paficabangkarimun.org/</a>
<a href="https://paficabanglebak.org/">https://paficabanglebak.org/</a>
<a href="https://paficabanglombok.org/">https://paficabanglombok.org/</a>
<a href="https://paficabangklaten.org/">https://paficabangklaten.org/</a>
</div>
</html>
