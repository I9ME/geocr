<section class="Section Section--style1 Section--footer u-positionRelative u-paddingHorizontal u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-paddingVertical">
	<header class="Section-header u-displayFlex u-flexJustifyContentCenter u-paddingBottom--inter">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/geocronblack.png">
	</header>
	<div class="Section-content">
		<ul class="Section-items u-marginVertical u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
			<?php
				$terms = get_terms(array(
					'taxonomy'=>'service-type',
					'hide_empty'=>'false',
				));		
			?>
				<?php 
				foreach ($terms as $term):
					$newsArgs = array (
								'post_type'	  => "service",
								'posts_per_page'  => 20,
								'tax_query' 	  => array(
						                    array(
						                        /**
									 * For get a specific taxanomy use
									 *'taxonomy' => 'category',
									 */
						                        'taxonomy' => 'service-type',
						                        'field'    => 'slug',
						                        'terms'    => $term->slug,
						                    )
						                )
							);

					$newsLoop = new WP_Query( $newsArgs );
					if($newsLoop->have_posts()){
				?>
			<li class="Section-items-item u-size4of24 invest-geotecnica u-paddingHorizontal--inter">
				<header class="Section-items-item-header">
					<h4 class="Section-items-item-header-title"><?php echo $term->name; ?></h4>
				</header>
				<ul class="Section-items-item-list">
					<?php 
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
					<li class="Section-items-item-list-point">
						<a class="Section-items-item-list-point-link is-animating" href="<?php echo get_home_url() ?>/servicos/#<?php echo $slug; ?>"><?php echo $name; ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
			</li>
		<?php }else{ ?>

			<li>Nenhum Serviço Cadastrado.</li>

		<?php } ?>

		<?php endforeach; ?>

			<li class="Section-items-item u-size4of24 orcamento u-paddingHorizontal--inter">
				<header class="Section-items-item-header">
					<h4 class="Section-items-item-header-title">Orçamento</h4>
				</header>
				
					<?php echo do_shortcode('[contact-form-7 id="20" title="footerform" html_class="Form Form--style1 Form--footerGeocron"]') ?>
				
			</li>
			<li class="Section-items-item u-size5of24 contato u-paddingHorizontal--inter">
				<header class="Section-items-item-header u-paddingBottom--inter--half">
					<h4 class="Section-items-item-header-title">Contato</h4>
				</header>
				<div class="u-displayFlex">
					<svg class="u-icon iconPhone">
						<use xlink:href="#iconPhone"></use>
					</svg>
					<p class="Section-items-item-subtitle">(85)98872-2675</p>
				</div>
				<div class="u-displayFlex">
					<svg class="u-icon iconEmail">
						<use xlink:href="#iconEmail"></use>
					</svg>
					<p class="Section-items-item-resume">contato@geocron.com.br</p>
				</div>
				<div class="u-displayFlex">
					<svg class="u-icon iconLocation">
						<use xlink:href="#iconLocation"></use>
					</svg>
					<p class="Section-items-item-resume">Av. Izabel Bezerra, 334 - Ancuri</p>
				</div>
				<div class="u-displayFlex">
					<svg class="u-icon iconCity">
						<use xlink:href="#iconCity"></use>
					</svg>
					<p class="Section-items-item-resume">Fortaleza - CE</p>
				</div>
				<figure class="Section-items-item-figure">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/mapa.png">
				</figure>
			</li>
		</ul>
	</div>

</section>