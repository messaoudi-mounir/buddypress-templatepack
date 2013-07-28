<?php
/**
 * Member activity
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php do_action( 'bp_before_member_activity_post_form' ); ?>
<?php
/**if ( is_user_logged_in() && bp_is_my_profile() && ( !bp_current_action() || bp_is_current_action( 'just-me' ) ) )
	bp_get_template_part( 'activity/post-form' );**/
do_action( 'bp_after_member_activity_post_form' );
do_action( 'bp_before_member_activity_content' ); ?>
<div id="member-activity">
	<?php bp_get_template_part( 'activity/activity-loop' ) ?>
</div><!-- end #member-activity -->
<?php do_action( 'bp_after_member_activity_content' ); ?>