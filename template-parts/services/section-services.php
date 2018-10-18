<section class="Section Section--style1 Section--services u-paddingHorizontal u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-marginVertical">
	<header class="Section-headerx">
		<h3 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter">Serviços</h3>
	</header>
	<ul class="Section-items u-sizeFull u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
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
					<li class="Section-items-item u-displayFlex u-size20of24 u-flexDirectionColumn u-flexSwitchRow u-paddingTop u-paddingBottom--inter u-paddingVertical u-flexJustifyContentSpaceBetween">
						<div class="Section-items-item-content u-displayFlex u-size12of24 u-flexAlignItemsCenter">
							<i class="FigureIcon FigureIcon--<?php echo $term->slug; ?>"></i>
							<h4 class="Section-items-item-content-title u-size1of24 u-marginLeft"><?php echo $term->name; ?></h4>
						</div>
						<ul class="Section-items-item-list u-size12of24 u-displayFlex owl-carousel service-carousel">
							<?php 
							$newsLoop = new WP_Query( $newsArgs );
							
							if ( $newsLoop->have_posts() ):
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
								<figure class="Section-items-item-list-point-figure">
									<figcaption class="Section-items-item-list-point-figcaption">
										<div class="Section-items-item-list-point-black"></div>
										<h5 class="Section-items-item-list-point-title"><?php echo get_the_title(); ?></h5>
									</figcaption>
								</figure>
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
</section>