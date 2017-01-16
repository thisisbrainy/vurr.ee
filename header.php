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

	<div id="header">

		<div class="left">

			<div class="logo">
				<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>" rel="bookmark"></a>
			</div>

		</div>

		<div class="right">

			<div class="left">

			</div>

			<div class="right">

				<div class="language left">EN</div>
				<div class="burger right"></div>

			</div>

		</div>

	</div>
