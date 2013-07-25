<?php
/**
 * Member panel
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<div id="member-panel">
	<nav id="member-navigation" class="link-list" role="navigation">
		<ul>
			<!-- probably want to see about using new nav menu here -->
			<?php bp_get_displayed_user_nav(); ?>
		</ul>
	</nav>
	<?php bp_get_template_part( 'members/single/member-header' ) ?>
</div>