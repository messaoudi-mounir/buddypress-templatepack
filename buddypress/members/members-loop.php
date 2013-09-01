<?php
/**
 * Member loop
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php do_action( 'bp_before_members_loop' ); ?>
<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>
	<div id="buddypress-pagination-top" class="buddypress-pagination">

		<div class="buddypress-pagination-count">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="buddypress-pagination-member buddypress-pagination-links">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

	<?php do_action( 'bp_before_directory_members_list' ); ?>

	<ul id="members-list" class="directory-list">
	<?php while ( bp_members() ) : bp_the_member(); ?>
		<li>
			<div class="member-avatar">
				<a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar(); ?></a>
			</div>
			<div class="member-details">
				<div class="member-title">
					<a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
				</div>
				<?php if ( bp_get_member_latest_update() ) : ?>
					<div class="member-update"> <?php bp_member_latest_update(); ?></div>
				<?php endif; ?>
			</div>
			<div class="member-activity">
				<?php bp_member_last_active(); ?>
			</div>
			<div class="member-action">
				<?php do_action( 'bp_directory_members_actions' ); ?>
			</div>
		</li>
	<?php endwhile; ?>
	</ul><!-- end #members-list -->
	<?php do_action( 'bp_after_directory_members_list' ); ?>

	<?php bp_member_hidden_fields(); ?>

	<div id="buddypress-pagination-bottom" class="buddypress-pagination">

		<div class="buddypress-pagination-count">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="buddypress-pagination-member buddypress-pagination-links">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>
<?php else: ?>
	<div id="message" class="message-info">
		<p><?php _e( "Sorry, no members were found.", 'buddypress' ); ?></p>
	</div>
<?php endif; ?>
