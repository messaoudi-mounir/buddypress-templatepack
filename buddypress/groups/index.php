<?php
/**
 * Group index
 *
 * @package BuddyPress
 * @subpackage Templatepack
 */
?>
<?php do_action( 'bp_before_directory_groups_page' ); ?>
<div id="buddypress">
	<?php do_action( 'bp_before_directory_groups' ); ?>
	<?php do_action( 'bp_before_directory_groups_content' ); ?>
	
	<div id="search-groups" class="search-directory" role="search">
		<?php bp_directory_groups_search_form(); ?>
	</div>

	<form action="" method="post" id="groups-directory" class="form-directory">
		
		<?php do_action( 'template_notices' ); ?>

		<nav class="nav-list" role="navigation">
			<ul>
				<li class="selected" id="groups-all"><a href="<?php bp_groups_directory_permalink(); ?>"><?php printf( __( 'All Groups <span>%s</span>', 'buddypress' ), bp_get_total_group_count() ); ?></a></li>

				<?php if ( is_user_logged_in() && bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ) : ?>
					<li id="groups-personal"><a href="<?php echo bp_loggedin_user_domain() . bp_get_groups_slug() . '/my-groups/'; ?>"><?php printf( __( 'My Groups <span>%s</span>', 'buddypress' ), bp_get_total_group_count_for_user( bp_loggedin_user_id() ) ); ?></a></li>
				<?php endif; ?>

				<?php do_action( 'bp_groups_directory_group_filter' ); ?>

			</ul>
		</nav>

		<nav class="nav-list" id="nav-secondary" role="navigation">
			<ul>
				<?php do_action( 'bp_groups_directory_group_types' ); ?>

				<li id="groups-order-select" class="last filter">

					<label for="groups-order-by"><?php _e( 'Order By:', 'buddypress' ); ?></label>

					<select id="groups-order-by">
						<option value="active"><?php _e( 'Last Active', 'buddypress' ); ?></option>
						<option value="popular"><?php _e( 'Most Members', 'buddypress' ); ?></option>
						<option value="newest"><?php _e( 'Newly Created', 'buddypress' ); ?></option>
						<option value="alphabetical"><?php _e( 'Alphabetical', 'buddypress' ); ?></option>

						<?php do_action( 'bp_groups_directory_order_options' ); ?>
					</select>
				</li>
			</ul>
		</nav>


		<div id="groups-directory" class="directory-list">
			<?php bp_get_template_part( 'groups/groups-loop' ); ?>
		</div><!-- end #group-directory -->
		<?php do_action( 'bp_directory_groups_content' ); ?>
		<?php wp_nonce_field( 'directory_groups', '_wpnonce-groups-filter' ); ?>
		<?php do_action( 'bp_after_directory_groups_content' ); ?>
	</form><!-- end #groups-form-directory -->
	<?php do_action( 'bp_after_directory_groups' ); ?>
</div><!-- end #buddypress -->
<?php do_action( 'bp_after_directory_groups_page' ); ?>
