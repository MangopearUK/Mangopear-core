<?php

	/**
	 * [Partial] Logo
	 *
	 * @category 	Core WordPress template files
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	
?>

	<a href="<?php echo get_site_url(); ?>" class="c-head-navigation__logo">
		<svg class="c-head-navigation__logo__icon  u-portable--hide" height="75" width="175" role="presentation"><use xlink:href="<?php mangopear_output_sprite(); ?>#mangopear-logo--white"/></svg>
		<svg class="c-head-navigation__logo__icon  u-desk--hide" height="75" width="75"  role="presentation"><use xlink:href="<?php mangopear_output_sprite(); ?>#mangopear-icon--white"/></svg>
		<span class="u-invisible">We are Mangopear creative.</span>
	</a>