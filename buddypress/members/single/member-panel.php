<?php
/**
 * Member panel
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<div id="member-panel">
	<nav id="member-navigation" class="nav-list">
		<ul>
			<!-- probably want to see about using new nav menu here -->
			<?php bp_get_displayed_user_nav(); ?>
			<?php bp_get_options_nav(); ?>
		</ul>
	</nav><!-- end #member-navigation -->
	<?php bp_get_template_part( 'members/single/member-header' ) ?>
</div><!-- end #member-panel -->