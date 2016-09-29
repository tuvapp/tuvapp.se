<?php

namespace App\Classes;

class Alert {
	public static function create($state, $message) {
		return '<div class="alert alert-dismissible alert-'.$state.'">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
				  '.$message.'
				</div>';
	}
}