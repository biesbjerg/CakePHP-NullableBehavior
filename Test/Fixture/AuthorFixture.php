<?php

class AuthorFixture extends CakeTestFixture {
	public $name = 'Author';

	public $fields = array(
		'id'         => array('type' => 'integer', 'key' => 'primary'),
		'first_name' => array('type' => 'string' ),
		'last_name'  => array('type' => 'string', 'null' => false),
		'created'    => 'datetime',
		'updated'    => 'datetime'
	);

/**
 * Records property
 *
 * @public array
 * @access public
*/
	public $records = array();
}
