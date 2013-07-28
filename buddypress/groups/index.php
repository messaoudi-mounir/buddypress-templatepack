<?php
/**
 * Group index
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php do_action( 'bp_before_directory_groups_page' ); ?>
<div id="buddypress">
	<?php do_action( 'bp_before_directory_groups' ); ?>
	<?php do_action( 'bp_before_directory_groups_content' ); ?>
	<form action="" method="post" id="groups-directory-form" class="directory-form">
		<?php do_action( 'template_notices' ); ?>
		<div id="group-directory" class="directory-list">
			<?php bp_get_template_part( 'groups/groups-loop' ); ?>
		</div><!-- end #group-directory -->
		<?php do_action( 'bp_directory_groups_content' ); ?>
		<?php wp_nonce_field( 'directory_groups', '_wpnonce-groups-filter' ); ?>
		<?php do_action( 'bp_after_directory_groups_content' ); ?>
	</form>
	<?php do_action( 'bp_after_directory_groups' ); ?>
</div><!-- end #buddypress -->
<?php do_action( 'bp_after_directory_groups_page' ); ?>
