<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>
<a href="<?php echo get_home_url() ?>">
	<?php if(is_home()){ ?>
	<h1>
		<span class="u-isHiddenVisually">Geocron Sondagens e Soluções Ambientais</span>
		<img src="<?php echo get_template_directory_uri() ?>/assets/images/geologo-2.png">
	</h1>
	<?php }else{ ?>
		<img src="<?php echo get_template_directory_uri() ?>/assets/images/geologo-2.png">
	<?php } ?>
</a>
