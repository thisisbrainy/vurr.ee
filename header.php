<?php

/**
 * @package WordPress
 * @subpackage vurree
 * @since 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="burger-menu" class="hidden">
		<?php wp_nav_menu(['theme_location' => 'primary', 'container' => '']); ?>
	</div>

	<div id="header">

		<div class="left">

			<div class="logo">
				<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>" rel="bookmark"></a>
			</div>

		</div>

		<div class="right">

			<div class="left">

				<div class="rauno">
					<a href="#"></a>
				</div>

			</div>

			<div class="right">

				<div class="language left">EN</div>
				<div class="burger right"></div>

			</div>

		</div>

	</div>

	<?php if(is_front_page()): ?>

		<div id="masthead">

			<h2>Sinu sotsiaalmeedia ja digiagentuur</h2>
			<p>Pole vahet, kas oled ettevõte, agentuur, üritus, bänd või Eesti president - kui mõtled digitaali peale, siis oleme sulle 24/7 kättesaadavad.</p>

		</div>

	<?php endif; ?>
