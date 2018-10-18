<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div id="main" class="SiteMain SiteMain--inter" role="main">
	<?php get_template_part('template-parts/page/intro','page'); ?>
	<?php get_template_part('template-parts/clientes/clientes','page');?>
	<?php get_template_part('template-parts/fale-conosco/section','fale-conosco');?>


	</main><!-- #main -->

</div>

<?php get_footer();