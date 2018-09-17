<?php if( is_home() || is_front_page() ) { ?>
	<section id="up" class="Section Section--intro Intro Intro--home Intro--before Intro--background Section--buscaRoupa Section--style2 u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter u-positionRelative">	
		<div class="Section-header u-paddingHorizontal u-paddingVertical u-size24of24 Captions u-displayFlex u-flexDirectionColumn u-maxSize--container u-alignCenterBox">
		<h2 class="Section-header-title Section-header-title--beforeTitleLine u-paddingHorizontal--inter--half u-size12of24">Sondagem, Hidrologia <br>& Estudos Ambientais.</h2>
		<!--FORMULÁRIO-->
		<p class="Section-header-resume u-paddingTop--inter u-paddingBottom--inter--half">Solicite um orçamento</p>
		 <form class="Form Form--style1">
			<?php echo do_shortcode('[contact-form-7 id="18" title="intropage"]')?>
		</form> 
	</div>
	</section>	

<?php } else { ?>



<?php } ?>
