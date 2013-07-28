<?php
/**
 * Activity loop
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>

<?php if ( bp_has_activities( bp_ajax_querystring( 'activity' ) ) ) : ?>
	<ul id="activity-stream" class="directory-list">
		<?php while ( bp_activities() ) : bp_the_activity(); ?>
			<?php bp_get_template_part( 'activity/entry' ); ?>
		<?php endwhile; ?>
	</ul><!-- end #activity-stream -->
<?php else : ?>
<?php endif; ?>