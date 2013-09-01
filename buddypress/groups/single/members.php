<?php
/**
 * Group members
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php if ( bp_group_has_members( 'exclude_admins_mods=0' ) ) : ?>

	<?php do_action( 'bp_before_group_members_content' ); ?>

	<nav class="list-nav" id="nav-secondary" role="navigation">
		<ul>

			<?php do_action( 'bp_members_directory_member_sub_types' ); ?>

		</ul>
	</div>

	<div id="pagination-top" class="pagination no-ajax">

		<div class="pagination-count">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" >

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

	<?php do_action( 'bp_before_group_members_list' ); ?>

	<ul id="member-list" class="directory-list">

		<?php while ( bp_group_members() ) : bp_group_the_member(); ?>

			<li>
				<a href="<?php bp_group_member_domain(); ?>">

					<?php bp_group_member_avatar_thumb(); ?>

				</a>

				<h5><?php bp_group_member_link(); ?></h5>
				<span class="member-activity"><?php bp_group_member_joined_since(); ?></span>

				<?php do_action( 'bp_group_members_list_item' ); ?>

				<?php if ( bp_is_active( 'friends' ) ) : ?>

					<div class="action">

						<?php bp_add_friend_button( bp_get_group_member_id(), bp_get_group_member_is_friend() ); ?>

						<?php do_action( 'bp_group_members_list_item_action' ); ?>

					</div>

				<?php endif; ?>
			</li>

		<?php endwhile; ?>

	</ul>

	<?php do_action( 'bp_after_group_members_list' ); ?>

	<div id="pagination-bottom" class="pagination no-ajax">

		<div class="pagination-count">

			<?php bp_members_pagination_count(); ?>

		</div>
>

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

	<?php do_action( 'bp_after_group_members_content' ); ?>

<?php else: ?>

	<div id="message" class="message-info">
		<p><?php _e( 'This group has no members.', 'buddypress' ); ?></p>
	</div>

<?php endif; ?>
