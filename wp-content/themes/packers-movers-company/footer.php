<?php
/**
 * The template for displaying the footer
 * @package Packers Movers Company
 * @since 1.0.0
 */

/**
 * Toogle Contents
 * @hooked packers_movers_company_content_offcanvas - 30
*/

do_action('packers_movers_company_before_footer_content_action'); ?>

</div>

<footer id="site-footer" role="contentinfo">

    <?php
    /**
     * Footer Content
     * @hooked packers_movers_company_footer_content_widget - 10
     * @hooked packers_movers_company_footer_content_info - 20
    */

    do_action('packers_movers_company_footer_content_action'); ?>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
