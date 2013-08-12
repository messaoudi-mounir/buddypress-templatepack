<?php
/**
 * Activity single home
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<div id="buddypress">
	<?php do_action( 'template_notices' ); ?>

	<div class="activity no-ajax">
		<?php if ( bp_has_activities( 'display_comments=threaded&show_hidden=true&include=' . bp_current_action() ) ) : ?>

			<ul id="activity-stream" class="directory-list">
			<?php while ( bp_activities() ) : bp_the_activity(); ?>

				<?php bp_get_template_part( 'activity/entry' ); ?>

			<?php endwhile; ?>
			</ul>

		<?php endif; ?>
	</div>
</div>
