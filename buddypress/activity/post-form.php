<?php
/**
 * Activity post-form
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<form action="<?php bp_activity_post_form_action(); ?>" method="post" id="update-form" name="update-form">

	<?php do_action( 'bp_before_activity_post_form' ); ?>

	<div id="update-avatar">
		<a href="<?php echo bp_loggedin_user_domain(); ?>">
			<?php bp_loggedin_user_avatar( 'width=' . bp_core_avatar_thumb_width() . '&height=' . bp_core_avatar_thumb_height() ); ?>
		</a>
	</div>
	
	<p class="message-update"><?php if ( bp_is_group() )
		printf( __( "What's new in %s, %s?", 'buddypress' ), bp_get_group_name(), bp_get_user_firstname() );
	else
		printf( __( "What's new, %s?", 'buddypress' ), bp_get_user_firstname() );
	?></p>

	<div id="update-content">
		<div id="update-textarea">
			<textarea name="update" id="update-new" cols="50" rows="10"><?php if ( isset( $_GET['r'] ) ) : ?>@<?php echo esc_attr( $_GET['r'] ); ?> <?php endif; ?></textarea>
		</div>

		<div id="update-options">
			<input type="submit" name="update-submit" id="update-submit" value="<?php _e( 'Post Update', 'buddypress' ); ?>" />
			
			<?php if ( bp_is_active( 'groups' ) && !bp_is_my_profile() && !bp_is_group() ) : ?>

				<div id="update-box">

					<?php _e( 'Post in', 'buddypress' ); ?>:

					<select id="update-in" name="update-in">
						<option selected="selected" value="0"><?php _e( 'My Profile', 'buddypress' ); ?></option>

						<?php if ( bp_has_groups( 'user_id=' . bp_loggedin_user_id() . '&type=alphabetical&max=100&per_page=100&populate_extras=0' ) ) :
							while ( bp_groups() ) : bp_the_group(); ?>

								<option value="<?php bp_group_id(); ?>"><?php bp_group_name(); ?></option>

							<?php endwhile;
						endif; ?>

					</select>
				</div>
				<input type="hidden" id="update-object" name="update-object" value="groups" />

			<?php elseif ( bp_is_group_home() ) : ?>

				<input type="hidden" id="update-hidden-object" name="update-object" value="groups" />
				<input type="hidden" id="update-hidden-in" name="update-in" value="<?php bp_group_id(); ?>" />

			<?php endif; ?>

			<?php do_action( 'bp_activity_post_form_options' ); ?>

		</div>
	</div>

	<?php wp_nonce_field( 'post_update', '_wpnonce_post_update' ); ?>
	<?php do_action( 'bp_after_activity_post_form' ); ?>

</form>
