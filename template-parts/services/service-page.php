<section class="Section Section--style1 Section--servicesPage u-paddingHorizontal u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-paddingVertical">
	<header class="Section-header u-paddingBottom--inter">
		<h1 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter">Serviços</h1>
	</header>
	<div class="Section-content u-paddingVertical">
		<ul class="Section-items u-sizeFull">
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
				<li class="Section-items-item u-sizeFull u-paddingHorizontal--inter">
					<div class="Section-items-item-content u-sizeFull">
						<header class="Section-items-item-content-header u-paddingBottom--inter u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
							<div class="Section-items-item-content-header-figure u-displayFlex">
								<i class="FigureIcon FigureIcon--<?php echo $term->slug; ?>"></i>
							</div>
							<h3 class="Section-items-item-content-header-title u-sizeFull u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter"><?php echo $term->name; ?></h3>
						</header>
					</div>
					<ul class="Section-items-item-list u-sizeFull">
						<?php 
							$newsLoop = new WP_Query( $newsArgs );
							
							if ( $newsLoop->have_posts() ):
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
									$looper = $looper + 1;
						 ?>
						<li id="<?php echo $slug; ?>" class="Section-items-item-list-point u-paddingHorizontal--inter u-displayFlex u-flexDirectionColumn u-flexSwitchRow">
							<div class="Section-items-item-list-point-content Section-items-item-list-point-content--paddingDesktop u-paddingHorizontal--inter--half u-size20of24">
								<div class="u-displayFlex u-sizeFull">
									<i class="FigureIcon FigureIcon--mais<?php if($looper % 2 == 0): echo '--yellow'; endif; ?>"></i>
									<h4 class="Section-items-item-list-point-content-title u-sizeFull u-paddingLeft--inter u-paddingBottom--inter--half"><?php echo get_the_title(); ?></h4>
								</div>
								<p class="Section-items-item-list-point-content-resume u-paddingHorizontal--inter u-size20of24"><?php echo get_the_content(); ?></p>
							</div>
							<div class="Section-items-item-list-point-content u-paddingBottom--inter--half u-size6of24">
								<figure class="Section-items-item-list-point-content-figure">
									<img class="u-sizeFull" src="<?php echo get_template_directory_uri() ?>/assets/images/vetor-servico<?php if($looper % 2 == 0): echo '-yellow'; endif; ?>.png">
								</figure>
							</div>
						</li>
						<?php endwhile; ?>
					<?php endif; ?>
					</ul>
				</li>
	<?php
		}else{ 
	?>
			<h4>Nenhum Serviço Cadastro</h4>
	<?php
		}
		endforeach;
	?>
			
		</ul>
	</div>
</section>