<?php
App::uses('AppModel', 'Model');
App::uses('Job','Model');
/**
 * Category Model
 *
 */
class Category extends AppModel {
    public $hasMany = 'Job';
 
       
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
