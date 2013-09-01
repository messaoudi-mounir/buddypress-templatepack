<?php
/**
 * Group loop
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php do_action( 'bp_before_groups_loop' ); ?>
<?php if ( bp_has_groups( bp_ajax_querystring( 'groups' ) ) ) : ?>
	<div class="pagination">
		<div class="pagination-count">
			<?php bp_groups_pagination_count(); ?>
		</div>
		<div class="pagination-links">
			<?php bp_groups_pagination_links(); ?>
		</div>
	</div>
	<?php do_action( 'bp_before_directory_groups_list' ); ?>
	<ul id="groups-list" class="directory-list">
	<?php while ( bp_groups() ) : bp_the_group(); ?>
		<li>
			<div class="group-avatar">
				<a href="<?php bp_group_permalink(); ?>"><?php bp_group_avatar( 'type=thumb&width=124&height=124' ); ?></a>
			</div>
			<div class="group-content">
				<div class="group-title"><a href="<?php bp_group_permalink(); ?>"><?php bp_group_name(); ?></a></div>
				<div class="group-meta"><span class="group-activity"><?php printf( __( 'active %s', 'buddypress' ), bp_get_group_last_active() ); ?></span></div>
				<div class="group-description"><?php bp_group_description_excerpt(); ?></div>
				<div class="group-action">
					<?php do_action( 'bp_directory_groups_actions' ); ?>
					<div class="group-meta">
						<?php bp_group_type(); ?> / <?php bp_group_member_count(); ?>
					</div>
				</div>
				<?php do_action( 'bp_directory_groups_item' ); ?>
			</div>
		</li>
	<?php endwhile; ?>
	</ul><!-- end #groups-list -->
	<?php do_action( 'bp_after_directory_groups_list' ); ?>
	<div class="pagination">
		<div class="pagination-count">
			<?php bp_groups_pagination_count(); ?>
		</div>
		<div class="pagination-links">
			<?php bp_groups_pagination_links(); ?>
		</div>
	</div>
<?php else: ?>
	<!-- to do: add in message if nothing returned -->
<?php endif; ?>
<?php do_action( 'bp_after_groups_loop' ); ?>
