<?php
/**
 * Activity single entry
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php do_action( 'bp_before_activity_entry' ); ?>
<li id="bp-activity-<?php bp_activity_id(); ?>">
	<div class="activity-header">
		<div class="activity-avatar">
			<a href="<?php bp_activity_user_link(); ?>">
				<?php bp_activity_avatar( 'type=thumb' ); ?>
			</a>
		</div>
		<?php if ( bp_get_activity_type() == 'activity_comment' ) : ?>
			<a class="activity-inreply" href="<?php bp_activity_thread_permalink(); ?>"><?php printf( _x( ' in reply to %s:', 'Paul posted a new activity comment [in reply to John]:', 'buddypress' ), bp_members_get_user_nicename( bp_get_activity_parent_user_id() ) ); ?></a>
		<?php endif; ?>
	</div>
	<div class="activity-body">
		<?php if ( bp_activity_has_content() ) : ?>
			<div class="activity-content">
				<?php bp_activity_action(); ?>
				<?php bp_activity_content_body(); ?>
				<?php do_action( 'bp_activity_entry_content' ); ?>
			</div>
		<?php endif; ?>
		<div class="activity-meta">
			<div class="activity-timestamp">
				<a href="<?php bp_activity_thread_permalink(); ?>"><?php echo bp_core_time_since( bp_get_activity_date_recorded() ); ?></a>
			</div>
			<?php if ( is_user_logged_in() ) : ?>
				<ul class="activity-actions">
					<?php if ( bp_activity_can_comment() ) : ?>
						<li><a href="<?php bp_activity_comment_link(); ?>" class="button has-count"><?php printf( __( 'Reply <span>%s</span>', 'buddypress' ), bp_activity_get_comment_count() ); ?></a></li>
					<?php endif; ?>
					<?php if ( bp_activity_can_favorite() ) : ?>
						<li>
							<?php if ( ! bp_get_activity_is_favorite() ) : ?>
								<a href="<?php bp_activity_favorite_link(); ?>" class="button"><?php _e( 'Favorite', 'buddypress' ); ?></a>
							<?php else : ?>
								<a href="<?php bp_activity_unfavorite_link(); ?>" class="button confirm"><?php _e( 'Remove Favorite', 'buddypress' ); ?></a>
							<?php endif; ?>
						</li>
					<?php endif; ?>
					<?php if ( bp_activity_user_can_delete() ) : ?>
						<li class="activity-delete"><?php bp_activity_delete_link(); ?></li>
					<?php endif; ?>
				</ul>
			<?php endif; ?>
			<?php do_action( 'bp_activity_entry_meta' ); ?>
		</div>
		<?php do_action( 'bp_before_activity_entry_comments' ); ?>
		<?php if ( bp_activity_get_comment_count() ) : ?>
			<div class="activity-comments">
				<p class="activity-comments-label"><?php printf( _n( 'There is %s voice in this conversation &nbsp;', 'There are %s voices in this conversation &nbsp;', count( bp_activity_get_comments_user_ids() ), 'buddypress' ), number_format_i18n( count( bp_activity_get_comments_user_ids() ) ) ); ?></p>
				<ul class="activity-coments-avatars">
					<?php bp_activity_comments_user_avatars(); ?>
				</ul>
				<?php bp_activity_comments(); ?>
				<?php if ( is_user_logged_in() ) : ?>

				<form action="<?php bp_activity_comment_form_action(); ?>" method="post" id="ac-form-<?php bp_activity_id(); ?>" class="ac-form"<?php bp_activity_comment_form_nojs_display(); ?>>
					<div class="ac-reply-avatar"><?php bp_loggedin_user_avatar( 'width=' . BP_AVATAR_THUMB_WIDTH . '&height=' . BP_AVATAR_THUMB_HEIGHT ); ?></div>
					<div class="ac-reply-content">
						<div class="ac-textarea">
							<textarea id="ac-input-<?php bp_activity_id(); ?>" class="ac-input" name="ac_input_<?php bp_activity_id(); ?>"></textarea>
						</div>
						<input type="submit" name="ac_form_submit" value="<?php _e( 'Post', 'buddypress' ); ?>" /> &nbsp; <a href="#" class="ac-reply-cancel"><?php _e( 'Cancel', 'buddypress' ); ?></a>
						<input type="hidden" name="comment_form_id" value="<?php bp_activity_id(); ?>" />
					</div>

					<?php do_action( 'bp_activity_entry_comments' ); ?>

					<?php wp_nonce_field( 'new_activity_comment', '_wpnonce_new_activity_comment' ); ?>

				</form>

			<?php endif; ?>

			</div>
		<?php endif; ?>
		<?php do_action( 'bp_after_activity_entry_comments' ); ?>
	</div>
</li>

<?php do_action( 'bp_after_activity_entry' ); ?>
