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
					$passaggiocantina = get_post_meta( $post->ID, 'gruppo_cantina', true );
					if ( isset( $passaggiocantina['et2018-quantita_birra'] ) ) {
						$quantita = $passaggiocantina['et2018-quantita_birra'];
						foreach ($quantita as $quanto){echo $quanto.' - ';}
					};
					break;
				// More columns
			}
		}
	}