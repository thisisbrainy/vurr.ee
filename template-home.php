<?php

/**
 * @package WordPress
 * @subpackage vurree
 * @since 1.0
 *
 * Template Name: Home
 */

get_header(); ?>

<div id="what-we-offer">

	<h2>Mida pakume?</h2>

	<div class="cols">

		<div class="item">

			<img src="<?php bloginfo('template_directory'); ?>/assets/images/what-we-offer-1.png">

			<h3>Sotsiaalmeedia</h3>

			<p>Lorem ipsum dolor sit amet.</p>

		</div>

		<div class="item">

			<img src="<?php bloginfo('template_directory'); ?>/assets/images/what-we-offer-2.png">

			<h3>Veebilehed</h3>

			<p>Lorem ipsum dolor sit amet.</p>

		</div>

		<div class="item">

			<img src="">

			<h3>Sisuloome</h3>

			<p>Lorem ipsum dolor sit amet.</p>

		</div>

	</div>

	<a href="#" class="cta">Vaata kõiki teenuseid</a>

</div> <!-- // what-we-offer -->

<div id="what-we-offer-sub">

	<div class="item">

		<h3>148 <span>õnnelikku klienti</span></h3>

	</div>

	<div class="item">

		<h3>622 <span>edukat projekti</span></h3>

	</div>

	<div class="item">

		<h3>1 <span>mitte väga õnnelik klient</span></h3>

	</div>

</div> <!-- // what we offer sub -->

<div id="work">

	<h2>Tehtud tööd</h2>

	<div class="wrap">

		<ul>

			<?php if($work->have_posts()): while($work->have_posts()): $work->the_post(); ?>

				<li>

					<div class="image left" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat;"></div>
					<div class="content right">

						<div class="client"><?php echo get_post_meta(get_the_ID(), 'client', true); ?></div>
						<h3><?php the_title(); ?></h3>
						<div class="entry"><?php the_content(); ?></div>

					</div>

					<div class="clear"></div>

				</li>

			<?php endwhile; endif; wp_reset_postdata(); ?>

		</ul>

	</div>

	<a href="#" class="cta">Vaata kõiki tehtud töid</a>

</div> <!-- // work -->

<div id="testimonials">

	<ul class="logos">

		<?php if($testimonials->have_posts()): while($testimonials->have_posts()): $testimonials->the_post(); ?>

			<li>

				logo ...

			</li>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</ul>

	<div class="quotes-container">

		<ul class="quotes">

			<?php if($testimonials->have_posts()): while($testimonials->have_posts()): $testimonials->the_post(); ?>

				<li>

					quote ...

				</li>

			<?php endwhile; endif; wp_reset_postdata(); ?>

		</ul>

	</div>

</div>

<?php get_footer();
