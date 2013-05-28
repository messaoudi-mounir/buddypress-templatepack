<?php
/**
 * Activity loop
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>

<?php if ( bp_has_activities( bp_ajax_querystring( 'activity' ) ) ) : ?>
	<?php while ( bp_activities() ) : bp_the_activity(); ?>
		<ul id="activity-stream" class="directory-list">
			<?php bp_get_template_part( 'activity/entry' ); ?>
		</ul>
	<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>