<section class="Section Section--style1 Section--clientesPage u-paddingHorizontal u-paddingVertical">
	<header class="Section-header u-alignCenter">
		<h1 class="Section-header-title Section-header-title--beforeTitleLine">Clientes</h1>
	</header>
	<ul class="Section-items u-flexDirectionColumn u-displayFlex u-flexAlignItemsCenter u-flexJustifyContentCenter u-paddingVertical">
		<?php 

			$newsArgs = array (
				'post_type'	  => "cliente",
				'posts_per_page'  => 20,
			);

			$newsLoop = new WP_Query( $newsArgs );
			if ( $newsLoop->have_posts() ){
				$looper = 0;
				while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
					//Imagem Destacada
					global $post;	
					$image_id = get_post_thumbnail_id();
					$sizeThumbs = 'thumbnail';
					$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
					$urlThumbnail = $urlThumbnail[0];
					$id = $post->ID;
					$category = get_the_terms($id, 'service-type')[0];
					$slug = $post->post_name;
					$name = $post->post_title;

		 ?>
		<li class="Section-items-item u-displayFlex u-flexDirectionColumn u-flexSwitchRow u-flexAlignItemsCenter u-flexJustifyContentCenter u-size20of24 u-paddingHorizontal--inter">
			<figure class="Section-items-item-figure u-size10of24">
				<img class="u-sizeFull u-height4of10" src="<?php echo get_template_directory_uri() ?>/assets/images/black.png">
			</figure>
			<div class="Section-items-item-content u-size16of24">
				<h3 class="Section-items-item-content-title u-paddingBottom--inter--half"><?php echo get_the_title() ?></h3>
				<h4 class="Section-items-item-content-subtitle">Serviços prestados:</h4>
				<p class="Section-items-item-content-resume"><?php 	echo get_the_content(); ?></p>
			</div>
		</li>
	<?php endwhile; ?>
<?php }else{ ?>
	<h4 class="u-paddingTop--inter">Nenhum Cliente Cadastrado.</h4>
<?php } ?>
	</ul>
</section>