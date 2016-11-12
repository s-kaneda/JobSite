<?php
class AddJobs extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_Jobs';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_table'=>array(
                'jobs'=>array(
                   'id'=> array(
                       'type' => 'integer',
                       'null' => false,
                       'default' => null,
                       'length' =>36,
                       'key' =>'primary',
                   ),                    
                    'title' => array(
                        'type' => 'string',
                        'null' => false,
                        'default' =>null
                    ),    
                    'description' => array(
                        'type' => 'text',
                        'null' => false,
                        'default' =>null
                    ),
                    'campanyname'=>array(
                        'type' => 'string',
                        'null' => false,
                        'default' => null
                    ),
                    'category_id'=> array(
                        'type' => 'integer',
                        'null' => false,
                        'default' => null,
                        'length' =>36,
                    ),
                    'salary' =>array(
                        'type' => 'string',
                        'null' =>false,
                        'defalt' => null
                    ),
                ),
            ),   
		),
		'down' => array(
            'drop_table'=>array(
                'jobs',
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
