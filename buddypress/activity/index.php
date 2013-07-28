<?php
/**
 * Archive Activity content part
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<div id="buddypress">
	<?php if ( bp_has_activities() ) : ?>
		<div class="buddypress-pagination">
			<div class="buddypress-pagination-count">
				<?php bp_activity_pagination_count(); ?>
			</div>
			<div class="buddypress-pagination-links">
				<?php bp_activity_pagination_links(); ?>
			</div>
		</div>
		<div id="buddypress-activity">
			<?php bp_get_template_part( 'activity/activity-loop' ); ?>
		</div>
		<div class="buddypress-pagination">
			<div class="buddypress-pagination-count">
				<?php bp_activity_pagination_count(); ?>
			</div>
			<div class="buddypress-pagination-links">
				<?php bp_activity_pagination_links(); ?>
			</div>
		</div>	
	<?php endif; ?>
</div><!-- end #buddypress -->