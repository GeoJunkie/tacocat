<?php

namespace Tacocat;

class Activator {

	public static function activate() {

		$role = get_role( 'administrator' );

		if ( ! empty( $role ) ) {
			$role->add_cap( 'tacocat_manage' );
		}
	}
}
