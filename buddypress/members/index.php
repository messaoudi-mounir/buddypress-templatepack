<?php
/**
 * Member directory index
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php do_action( 'bp_template_before_directory_members_page' ); ?>
<div id="buddypress">
	<?php do_action( 'bp_template_before_directory_members_content' ); ?>
	<?php if ( bp_has_members() ) : ?>
		<div id="members-directory">
			<?php bp_get_template_part( 'members/members-loop' ); ?>
		</div>
	<?php else : ?>
		<!-- do something here output -->
	<?php endif; ?>
</div>

