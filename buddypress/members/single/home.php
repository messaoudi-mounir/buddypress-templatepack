<?php
/**
 * Member home
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<div id="buddypress">

	<div id="member-sidebar">
		<nav id="member-navigation" role="navigation">
			<ul>
				<!-- probably want to see about using new nav menu here -->
				<?php bp_get_displayed_user_nav(); ?>
			</ul>
		</nav>
		<?php bp_get_template_part( 'members/single/member-header' ) ?>

	</div>

	<div id="member-profile">

		<?php do_action( 'bp_before_member_body' );

		if ( bp_is_user_activity() || !bp_current_component() ) :
			bp_get_template_part( 'members/single/activity' );

		elseif ( bp_is_user_blogs() ) :
			bp_get_template_part( 'members/single/blogs'    );

		elseif ( bp_is_user_friends() ) :
			bp_get_template_part( 'members/single/friends'  );

		elseif ( bp_is_user_groups() ) :
			bp_get_template_part( 'members/single/groups'   );

		elseif ( bp_is_user_messages() ) :
			bp_get_template_part( 'members/single/messages' );

		elseif ( bp_is_user_profile() ) :
			bp_get_template_part( 'members/single/profile'  );

		elseif ( bp_is_user_forums() ) :
			bp_get_template_part( 'members/single/forums'   );

		elseif ( bp_is_user_settings() ) :
			bp_get_template_part( 'members/single/settings' );

		// If nothing sticks, load a generic template
		else :
			bp_get_template_part( 'members/single/plugins'  );

		endif;

		do_action( 'bp_after_member_body' ); ?>

	</div>

	<?php do_action( 'bp_after_member_home_content' ); ?>

</div>
