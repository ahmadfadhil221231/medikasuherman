<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsMass
 */
?>
<?php do_action('newsmass_before_footer'); ?>

<?php get_template_part('template-parts/footer/before-footer'); ?>

<footer id="colophon" class="site-footer">

    <?php get_template_part('template-parts/footer/footer-widgetarea'); ?>

    <div class="wpi-seperator"></div>

    <?php get_template_part('template-parts/footer/footer-copyright'); ?>


</footer><!-- #colophon -->
<?php get_template_part('template-parts/footer/after-footer'); ?>

<?php do_action('newsmass_before_footer'); ?>

<?php
$enable_footer_scroll_to_top = newsmass_get_option('enable_footer_scroll_to_top');
if ($enable_footer_scroll_to_top) { ?>
<button id="scrollToTopBtn" aria-label="Scroll to top" title="Scroll to top">
    <svg id="progressCircle" width="50" height="50" aria-hidden="true">
        <circle cx="25" cy="25" r="22" stroke-width="4" fill="none"/>
    </svg>
    <?php newsmass_the_theme_svg('arrow-up'); ?>
</button>
<?php } ?>

<?php
$enable_footer_progressbar = newsmass_get_option('enable_footer_progressbar');
if ($enable_footer_progressbar) { ?>
    <div id="progressBarContainer">
        <div id="progressBar"></div>
    </div>
<?php } ?>

</div><!-- #page -->

<?php
wp_footer(); ?>
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
