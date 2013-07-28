<?php
/**
 * Member loop
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>
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
<?php else: ?>

<?php endif; ?>
