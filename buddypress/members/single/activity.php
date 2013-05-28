<?php
/**
 * Member activity
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php
//if ( is_user_logged_in() && bp_is_my_profile() && ( !bp_current_action() || bp_is_current_action( 'just-me' ) ) )
//	bp_get_template_part( 'activity/post-form' );
?>

<div id="member-activity">
	<?php bp_get_template_part( 'activity/activity-loop' ) ?>
</div>
