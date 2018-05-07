<?php
/**
	 *
	 * Aggiungi Disponibilità nel Quick Edit
	 */

	function etdispo_quickedit_custom_posts_columns( $posts_columns ) {
		$posts_columns['et2018-quantita_birra'] = __( 'Disponibilità', 'etdispo' );
		return $posts_columns;
	}
	add_filter( 'manage_post_posts_columns', 'etdispo_quickedit_custom_posts_columns' );

	function etdispo_quickedit_custom_column_display( $column_name, $post_id ) {
		if ( 'et2018-quantita_birra' == $column_name ) {
			$etdispo_regi = get_post_meta( $post_id, 'et2018-quantita_birra', true );

			if ( $etdispo_regi ) {
				echo esc_html( $etdispo_regi );
			} else {
				esc_html_e( 'N/A', 'etdispo' );
			}
		}
	}
	add_action( 'manage_post_posts_custom_column', 'etdispo_quickedit_custom_column_display', 10, 2 );

	function etdispo_quickedit_fields( $column_name, $post_type, $post_id ) {
		if ( 'et2018-quantita_birra' != $column_name )
			return;

		$etdispo_regi = get_post_meta( $post_id, 'et2018-quantita_birra', true );
		?>
		<fieldset class="inline-edit-col-right">
			<div class="inline-edit-col">
				<label>
					<span class="title"><?php esc_html_e( 'Disponibilità', 'etdispo' ); ?></span>
					<span class="input-text-wrap">
                    <input type="text" name="et2018-quantita_birra" class="etdispoedit" value="">
                </span>
				</label>
			</div>
		</fieldset>
		<?php
	}
	add_action( 'quick_edit_custom_box', 'etdispo_quickedit_fields', 10, 3 );
	function etdispo_quickedit_save_post( $post_id, $post ) {
		// if called by autosave, then bail here
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return;

		// if this "post" post type?
		if ( $post->post_type != 'post' )
			return;

		// does this user have permissions?
		if ( ! current_user_can( 'edit_post', $post_id ) )
			return;

		// update!
		if ( isset( $_POST['et2018-quantita_birra'] ) ) {
			update_post_meta( $post_id, 'et2018-quantita_birra', $_POST['et2018-quantita_birra'] );
		}
	}
	add_action( 'save_post', 'etdispo_quickedit_save_post', 10, 2 );

	function etdispo_quickedit_javascript() {
		$current_screen = get_current_screen();
		if ( $current_screen->id != 'edit-post' || $current_screen->post_type != 'post' )
			return;

		// Ensure jQuery library loads
		wp_enqueue_script( 'jquery' );
		?>
		<script type="text/javascript">
            jQuery( function( $ ) {
                $( '#the-list' ).on( 'click', 'a.editinline', function( e ) {
                    e.preventDefault();
                    var editDispo = $(this).data( 'edit-dispo' );
                    inlineEditPost.revert();
                    $( '.etdispoedit' ).val( editDispo ? editDispo : '' );
                });
            });
		</script>
		<?php
	}
	add_action( 'admin_print_footer_scripts-edit.php', 'etdispo_quickedit_javascript' );
	/* Qui */
	function etdispo_quickedit_set_data( $actions, $post ) {
		$found_value = get_post_meta( $post->ID, 'et2018-quantita_birra', true );

		if ( $found_value ) {
			if ( isset( $actions['inline hide-if-no-js'] ) ) {
				$new_attribute = sprintf( 'data-edit-dispo="%s"', esc_attr( $found_value ) );
				$actions['inline hide-if-no-js'] = str_replace( 'class=', "$new_attribute class=", $actions['inline hide-if-no-js'] );
			}
		}

		return $actions;
	}
	add_filter('post_row_actions', 'etdispo_quickedit_set_data', 10, 2);