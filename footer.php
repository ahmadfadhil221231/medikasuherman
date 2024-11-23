<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PopularFX
 */
 
$footer_text = get_theme_mod('popularfx_footer_text');

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php if(empty($footer_text)){ ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'popularfx' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'popularfx' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( popularfx_theme_credits() );
			?>
			<?php }else{
				echo wp_kses($footer_text, 'post');
			} ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
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
