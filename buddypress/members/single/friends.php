<?php
/**
 * Member friends
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>

<nav class="nav-list no-ajax" id="nav-secondary" role="navigation">
	<ul>
		<?php if ( bp_is_my_profile() ) bp_get_options_nav(); ?>

		<?php if ( !bp_is_current_action( 'requests' ) ) : ?>

			<li id="members-order-select" class="last filter">

				<label for="members-friends"><?php _e( 'Order By:', 'buddypress' ); ?></label>
				<select id="members-friends">
					<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
					<option value="newest"><?php _e( 'Newest Registered', 'buddypress' ); ?></option>
					<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ); ?></option>

					<?php do_action( 'bp_member_blog_order_options' ); ?>

				</select>
			</li>

		<?php endif; ?>

	</ul>
</nav>

<?php
switch ( bp_current_action() ) :

	// Home/My Friends
	case 'my-friends' :
		do_action( 'bp_before_member_friends_content' ); ?>

		<div class="members friends">

			<?php bp_get_template_part( 'members/members-loop' ) ?>

		</div><!-- .members.friends -->

		<?php do_action( 'bp_after_member_friends_content' );
		break;

	case 'requests' :
		bp_get_template_part( 'members/single/friends/requests' );
		break;

	// Any other
	default :
		bp_get_template_part( 'members/single/plugins' );
		break;
endswitch;

