<?php
App::uses('AppModel', 'Model');
/**
 * Job Model
 *
 */
class Job extends AppModel {
    
    public $belongsTo = 'Category';
    
   
        
    

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
