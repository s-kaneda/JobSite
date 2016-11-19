<?php
App::uses('AppModel', 'Model');

class JobSearch extends AppModel {
    
    public $useTable = false;

    public $validate = array(
        'keyword' => array(
            'Blank'=>array(
                'rule'=>array('notBlank'),
                'required'=>'true',
                'message' =>'キーワードが入力されてません'
            ),
        ),
    );    
 
       
	
}
