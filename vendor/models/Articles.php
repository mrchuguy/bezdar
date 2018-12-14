<?php

namespace models;

use core\models\Main;

class Articles extends Main {

    public function getAll() {
	return array(
	    array(
		'title' => 'first',
		'text' => 'many text',
		'date' => '14.12.18'
	    ),
	    array(
		'title' => 'second',
		'text' => 'many text',
		'date' => '17.12.18'
	    ),
	    array(
		'title' => 'third',
		'text' => 'many text',
		'date' => '15.12.18'
	    ),
	);
    }

}
