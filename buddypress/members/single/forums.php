<?php
/**
 * Member forums
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<nav class="list-nav no-ajax" id="subnav" role="navigation">
	<ul>
		<?php bp_get_options_nav(); ?>

		<li id="forums-order-select" class="last filter">

			<label for="forums-order-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>
			<select id="forums-order-by">
				<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
				<option value="popular"><?php _e( 'Most Posts', 'buddypress' ); ?></option>
				<option value="unreplied"><?php _e( 'Unreplied', 'buddypress' ); ?></option>

				<?php do_action( 'bp_forums_directory_order_options' ); ?>

			</select>
		</li>
	</ul>
</nav>

<?php

if ( bp_is_current_action( 'favorites' ) ) :
	bp_get_template_part( 'members/single/forums/topics' );

else :
	do_action( 'bp_before_member_forums_content' ); ?>

	<div class="forums myforums">

		<?php bp_get_template_part( 'forums/forums-loop' ) ?>

	</div>

	<?php do_action( 'bp_after_member_forums_content' ); ?>

<?php endif; ?>
