<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<!-- teste -->
<main id="main" class="SiteMain Site-main" role="main">
	<?php // get_template_part('template-parts/plugins/plugin','lightbox'); ?>
	<?php get_template_part('template-parts/page/intro','page'); ?>
	<?php get_template_part('template-parts/services/section','services') ?>
	<?php get_template_part('template-parts/sobre/section','sobre') ?>
	<?php get_template_part('template-parts/clientes/section','clientes') ?>
	<?php get_template_part('template-parts/fale-conosco/section','fale-conosco') ?>
	<?php get_template_part('template-parts/atendimento/section','atendimento') ?>
</main><!-- #main -->



<?php get_footer();