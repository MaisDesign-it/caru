<?php

	/**
	 *
	 * TODO Inserire codice per le colonne
	 */
	class et2018_Custom_Admin_Columns extends MB_Admin_Columns_Post {
		public function columns( $columns ) {
			$columns  = parent::columns( $columns );
			$position = '';
			$target   = '';
			$this->add( $columns, 'column_id', 'Disponibilità', $position, $target );

			// Add more if you want
			return $columns;
		}

		public function show( $column, $post_id ) {
			switch ( $column ) {
				case 'column_id';
					global $post;
					if (is_category('cantina')) {
						$passaggiocantina = get_post_meta( $post->ID, 'gruppo_cantina', true );
						$format           = $passaggiocantina;
						if ( isset ( $format['avanzate'] ) ) {
							$avanzate = $format['avanzate'];
							$numeratore = 1;
							foreach ( $avanzate as $avanzi ) {
								${'cantina' . $numeratore} = '<div class="row">( A: ' . $avanzi['et2018-annata_birra'] . ' F: ' . $avanzi['et2018-formato_birra'] . ' Qt: ' . $avanzi['et2018-quantita_birra'] . ')</div>';
								echo ${'cantina' . $numeratore};
								++$numeratore; /** TODO usando la variabile $cantina . $numeratore si potrebbe usare js per modificarlo **/
							};
						};
					}else{
						echo 'Non cantina';
					}
					break;
				// More columns
			}
		}
	}