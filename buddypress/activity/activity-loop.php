<?php
/**
 * Activity loop
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<ul class="bp-archive-activity">
	<?php while ( bp_activities() ) : bp_the_activity(); ?>
		<?php bp_get_template_part( 'activity/entry' ); ?>
	<?php endwhile; ?>
</ul>
