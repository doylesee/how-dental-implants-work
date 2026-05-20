<?php get_header(); ?>
	
	<div id="page-content">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		<div id="footer-anchor-js"></div>
		<div class="section-1 fadeIn" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="<?php bloginfo('template_url'); ?>/img/section-1-bg.jpg" data-natural-width="1920" data-natural-height="730">
			<img src="<?php bloginfo('template_url'); ?>/img/section-1-img.png" alt="" class="parallax" />
			<div class="row section-1__copy">
				<div class="small-12 medium-10 medium-offset-1 end column">
					<h1><?php echo get_field('heading_section_1'); ?></h1>
					<p><?php echo get_field('short_description_section_1'); ?></p>
					<!--<p><a href="#" target="_blank"><img src="<?php //bloginfo('template_url'); ?>/img/dental-studio-101__logo.png" alt="Dental Studio 101" /></a></p>-->
				</div>
			</div>
		</div><!-- close .section-1 -->
			
		<div class="section-2">
			<img src="<?php bloginfo('template_url'); ?>/img/section-2-img.jpg" alt="" class="effects effects--right" />
			<div class="row section-2__copy">
				<div class="small-12 medium-7 medium-offset-5 columns effects effects--left">
					<?php echo get_field('content_section_2'); ?>
				</div>
			</div>
		</div><!-- close .section-2 -->
			
		<div class="section-3">
			<img src="<?php bloginfo('template_url'); ?>/img/section-1-img.png" alt="" class="parallax" />
			<div class="section-3__intro">
				<div class="row">
					<div class="small-12 medium-10 medium-offset-1 end column">
						<h2><?php echo get_field('heading_section_3'); ?></h2>
						<p><?php echo get_field('short_description_section_3'); ?></p>
					</div>
				</div>
			</div><!-- close .section-3__intro -->
			<div class="row common-reasons">
				<div class="small-12 columns common-reasons__item js clearfix">
						<div class="common-reasons__item-image effects effects--fade">
							<div class="common-reasons__item-image-pad">
								<img src="<?php bloginfo('template_url'); ?>/img/common-reasons__item-image-1.png" alt="" />
								<h3>Injury</h3>
							</div>
						</div>
						<div class="common-reasons__item-copy effects effects--fade">
							<?php echo get_field('injury'); ?>
						</div>
					</div><!-- close .common-reasons__item -->
					<div class="small-12 columns common-reasons__item js clearfix">
						<div class="common-reasons__item-image effects effects--fade">
							<div class="common-reasons__item-image-pad">
								<img src="<?php bloginfo('template_url'); ?>/img/common-reasons__item-image-2.png" alt="" />
								<h3>Missing Tooth Replacement</h3>
							</div>
						</div>
						<div class="common-reasons__item-copy effects effects--fade">
							<?php echo get_field('missing_tooth_replacement'); ?>
						</div>
					</div><!-- close .common-reasons__item -->
					<div class="small-12 columns common-reasons__item js clearfix">
						<div class="common-reasons__item-image effects effects--fade">
							<div class="common-reasons__item-image-pad">
								<img src="<?php bloginfo('template_url'); ?>/img/common-reasons__item-image-3.png" alt="" />
								<h3>Cosmetic Solution</h3>
							</div>
						</div>
						<div class="common-reasons__item-copy effects effects--fade">
							<?php echo get_field('cosmetic_solution'); ?>
						</div>
					</div><!-- close .common-reasons__item -->
					<div class="small-12 columns common-reasons__item js clearfix">
						<div class="common-reasons__item-image effects effects--fade">
							<div class="common-reasons__item-image-pad">	
								<img src="<?php bloginfo('template_url'); ?>/img/common-reasons__item-image-4.png" alt="" />
								<h3>Denture Alternative</h3>
							</div>
						</div>
						<div class="common-reasons__item-copy effects effects--fade">
							<?php echo get_field('denture_alternative'); ?>
						</div>
					</div><!-- close .common-reasons__item -->
			</div><!-- close .common-reasons -->
		</div><!-- close .section-3 -->
			
		<div class="section-4">
			<div class="row section-4__copy">
				<div class="small-12 medium-6 end columns effects effects--right">
					<h2><?php echo get_field('heading_section_4'); ?></h2>
					<?php echo get_field('content_section_4'); ?>
				</div>
			</div>
			<div class="section-4__image effects effects--left">
				<img src="<?php bloginfo('template_url'); ?>/img/section-4__image-1.png" alt="" />
				<img src="<?php bloginfo('template_url'); ?>/img/section-4__image-2.png" alt="" class="parallax" />
				<img src="<?php bloginfo('template_url'); ?>/img/section-4__image-3.png" alt="" />
			</div>
		</div><!-- close .section-4 -->
		
		<div class="section-5">
			<img src="<?php bloginfo('template_url'); ?>/img/section-1-img.png" alt="" class="section-5__background effects effects--down" />
			<div class="row">
				<div class="small-12 column technical-terms effects effects--fade">
					<h2><?php echo get_field('heading_section_5'); ?></h2>
					<img src="<?php bloginfo('template_url'); ?>/img/section-5-img.png" alt="" />
					<div class="row technical-terms__list">
						<div class="small-12 large-5 columns technical-terms__item-wrapper">
							<div class="technical-terms__item technical-terms__item--1">
								<h3>Crown</h3>
								<p><?php echo get_field('crown'); ?></p>
							</div><!-- close .tecnical-terms__item -->
							<div class="technical-terms__item technical-terms__item--2">
								<h3>Abutment</h3>
								<p><?php echo get_field('abutment'); ?></p>
							</div><!-- close .tecnical-terms__item -->
						</div><!-- close .technical-terms__item-wrapper -->
						<div class="small-12 large-5 large-offset-2 columns technical-terms__item-wrapper">
							<div class="technical-terms__item technical-terms__item--3">
								<h3>Dental Implant</h3>
								<p><?php echo get_field('dental_implant'); ?></p>
							</div><!-- close .tecnical-terms__item -->
						</div><!-- close .technical-terms__item-wrapper -->
					</div><!-- close .technical-terms -->
				</div>
			</div>
		</div><!-- close .section-5 -->
		
		<div class="section-6 effects effects--fade" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="<?php bloginfo('template_url'); ?>/img/section-6-bg.jpg" data-natural-width="1920" data-natural-height="547">
			<div class="row">
				<div class="small-12 medium-10 medium-offset-1 end column">
					<h2><?php echo get_field('heading_section_6'); ?></h2>
					<?php echo get_field('content_section_6'); ?>
				</div>
			</div>
		</div><!-- close .section-6 -->
		
		<div class="section-7 effects effects--fade">
			<img src="<?php bloginfo('template_url'); ?>/img/section-7-img.png" alt="" class="parallax" />
			<div class="row">
				<div class="small-12 medium-10 medium-offset-1 end column">
					<h2><?php echo get_field('heading_section_7'); ?></h2>
					<?php echo get_field('content_section_7'); ?>
					<?php
						$schedule_an_appointment_link = get_field('schedule_an_appointment_link');
						 if ($schedule_an_appointment_link) {
					?>
					<p class="text-center"><a href="<?php echo $schedule_an_appointment_link; ?>" target="_blank" class="button hvr-bounce-to-right">Schedule an Appointment</a></p>
					<?php } ?>
				</div>
				<div class="small-12 medium-8 medium-offset-2 end column section-7__additional-information">
					<p><?php echo get_field('additional_information_section_7'); ?></p>
				</div>
			</div>
		</div><!-- close .section-7 -->
	
	<?php endwhile; else: ?>
	<?php endif; ?>
	
	</div><!--close #page-content-->
	
<?php get_footer(); ?>