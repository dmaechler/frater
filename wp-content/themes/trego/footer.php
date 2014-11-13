<?php
/**
 * @package Trego
 * @since Trego 1.0
 */

global $trego_vars;
?>
		</div><!-- #main -->
		<?php if(is_page_template('page-one-template.php')) : ?>
		<div class="section-block contact-block">
			<div class="section-content">
				<div class="site-content">
					<div class="row-container">
						<div class="row">
							<div class="span-4 span-m-4 span-s-12 column">
							<?php
							if(!empty($trego_vars['contact_address'])){
								echo "<div class='icon-location'></div>";
								echo $trego_vars['contact_address'];
							}
							?>
							</div>
							<div class="span-4 span-m-4 span-s-12 column">
							<?php
							if(!empty($trego_vars['contact_phone'])){
								echo "<div class='icon-phone'></div>";
								echo $trego_vars['contact_phone'];
							}
							?>
							</div>
							<div class="span-4 span-m-4 span-s-12 column">
							<?php
							if(!empty($trego_vars['contact_email'])){
								echo "<div class='icon-email'></div>";
								echo $trego_vars['contact_email'];
							}
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php elseif(is_page_template('page-portfolio-template.php')): ?>
		<?php else: ?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="widget-bottom">
				<?php if(!is_page_template('page-gallery-template.php')): ?>
				<ul class="block-grid-3 block-grid-m-1 block-grid-s-1">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</ul>
				<?php endif; ?>
				<div class="site-info">
					<?php if ( !is_page_template('page-gallery-template.php') && has_nav_menu( 'footer' ) ) : ?>
					<div class="footer-links">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'footer',
						'container'       => false,
						'depth'           => 0,
					));
					?>
					</div>
					<?php endif; ?>
					<div class="social-icons">
						<ul class="social-links">
						<?php if(!empty($trego_vars['facebook_link'])) :?>
							<li><a title="Facebook" href="<?php echo $trego_vars['facebook_link']; ?>" class="facebook"> </a></li>
						<?php endif; ?>
						<?php if(!empty($trego_vars['twitter_link'])) :?>
							<li><a title="Twitter" href="<?php echo $trego_vars['twitter_link']; ?>" class="twitter"> </a></li>
						<?php endif; ?>
						<?php if(!empty($trego_vars['linkedin_link'])) :?>
							<li><a title="Linkedin" href="<?php echo $trego_vars['linkedin_link']; ?>" class="linkedin"> </a></li>
						<?php endif; ?>
						<?php if(!empty($trego_vars['flickr_link'])) :?>
							<li><a title="Flickr" href="<?php echo $trego_vars['flickr_link']; ?>" class="flickr"> </a></li>
						<?php endif; ?>
						<?php if(!empty($trego_vars['googleplus_link'])) :?>
							<li><a title="Google Plus" href="<?php echo $trego_vars['googleplus_link']; ?>" class="googleplus"> </a></li>
						<?php endif; ?>
						<?php if(!empty($trego_vars['pinterest_link'])) :?>
							<li><a title="Pinterest" href="<?php echo $trego_vars['pinterest_link']; ?>" class="pinterest"> </a></li>
						<?php endif; ?>
						<?php if(!empty($trego_vars['youtube_link'])) :?>
							<li><a title="YouTube" href="<?php echo $trego_vars['youtube_link']; ?>" class="youtube"> </a></li>
						<?php endif; ?>
						<?php if(!empty($trego_vars['instagram_link'])) :?>
							<li><a title="Instagram" href="<?php echo $trego_vars['instagram_link']; ?>" class="instagram"> </a></li>
						<?php endif; ?>
						</ul>
					</div>
					<div class="copyrights"><?php if(isset($trego_vars['copyright'])) echo $trego_vars['copyright']; ?></div>
				</div>
			</div>
		</footer>
		<?php endif; ?>
	</div><!-- #wrapper -->
	<?php wp_footer(); ?>
	<?php if(trego_get_background()) { ?>
	<div class="page-background"><div>
	<?php } ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.13/slick.min.js"></script>
</body>
</html>