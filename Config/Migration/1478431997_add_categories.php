<?php
class AddCategories extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_Categories';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_table'=>array(
                'categories'=>array(
                   'id'=> array(
                       'type' => 'integer',
                       'null' => false,
                       'default' => null,
                       'length' =>36,
                       'key' =>'primary',
                   ),                    
                    'name' => array(
                        'type' => 'string',
                        'null' => false,
                        'default' =>null
                    ),  
                    'created'=> array(
                        'type'=> 'datetime'
                    ),                    
                ),
            ),
		),                    
		'down' => array(
            'drop_table'=>array(
                'categories',
            ),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
