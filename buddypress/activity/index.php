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
		<div class="bp-pagination">
			<div class="bp-pagination-count">
				<?php bp_activity_pagination_count(); ?>
			</div>
			<div class="bp-pagination-links">
				<?php bp_activity_pagination_links(); ?>
			</div>
		</div>
		<div class="bp-activity">
			<?php bp_get_template_part( 'activity/activity-loop' ); ?>
		</div>
		<div class="bp-pagination">
			<div class="bp-pagination-count">
				<?php bp_activity_pagination_count(); ?>
			</div>
			<div class="bp-pagination-links">
				<?php bp_activity_pagination_links(); ?>
			</div>
		</div>	
	<?php endif; ?>
</div>