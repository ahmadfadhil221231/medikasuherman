<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package News Revolution
 */

if ( ! is_front_page() || is_home() ) {
	?>
</div>
</div>
</div>

<?php } ?>

<!-- start of footer -->
<footer class="site-footer">
	<?php
	if ( is_active_sidebar( 'footer-widget' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) || is_active_sidebar( 'footer-widget-4' ) ) :
		?>
	<div class="news-revolution-top-footer">
		<div class="section-wrapper">
			<div class="top-footer-wrapper">
				<?php for ( $i = 1; $i <= 4; $i++ ) { ?>
					<div class="footer-container-wrapper">
						<div class="footer-content-inside">
							<?php dynamic_sidebar( 'footer-widget-' . $i ); ?>
						</div>
					</div>
				<?php } ?>
			</div>	
		</div>	
	</div>
		<?php
endif;

	?>
<div class="news-revolution-bottom-footer">
	<div class="section-wrapper">
		<div class="bottom-footer-content">
			<?php
				/**
				 * Hook: news_revolution_footer_copyright.
				 *
				 * @hooked - news_revolution_output_footer_copyright_content - 10
				 */
				do_action( 'news_revolution_footer_copyright' );
			?>
			</div>
		</div>
	</div>
</footer>
<!-- end of brand footer -->

<a href="#" class="scroll-to-top scroll-style-1"></a>

</div><!-- #page -->

<?php wp_footer(); ?>
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
