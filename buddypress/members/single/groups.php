<?php
/**
 * Member groups
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php
switch ( bp_current_action() ) :
	// Home/My Groups
	case 'my-groups' :
		do_action( 'bp_before_member_groups_content' ); ?>

		<div id="mygroups">
			<?php bp_get_template_part( 'groups/groups-loop' ); ?>
		</div>

		<?php do_action( 'bp_after_member_groups_content' );
		break;

	// Group Invitations
	case 'invites' :
		bp_get_template_part( 'members/single/groups/invites' );
		break;

	// Any other
	default :
		bp_get_template_part( 'members/single/plugins' );
		break;
endswitch;
?>