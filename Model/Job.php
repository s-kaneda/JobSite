<?php
App::uses('AppModel', 'Model');
/**
 * Job Model
 *
 */
class Job extends AppModel {
    
    public $belongsTo = 'Category';
    
   
        public $validate =array(
            
            //フィールド名
            'name'=> array(
                //バリデーション名
                'notBlank'=>array(
                    //バリデーションのルール
                    'rule'=>array('notBlank'),
                    'required'=>'true',
                    'message'=>'名前が未入力です',
                ),

                //バリデーション名
                'maxlength'=>array(
                    //バリデーションのルール
                    'rule'=>array('maxlength',200,),
                    'required'=> 'true',
                    'mesage'=>'200文字以内で入力してください'
                ),           
            ),
            //フィールド名
            'age'=> array(
                //バリデーション名
                'notBlank'=>array(
                    //バリデーションのルール
                    'rule'=>array('notBlank'),
                    'required'=>'true',
                    'message'=>'名前が未入力です',
                ),
            ),    
            //フィールド名
            'adress'=> array(
                //バリデーション名
                'notBlank'=>array(
                    //バリデーションのルール
                    'rule'=>array('notBlank'),
                    'required'=>'true',
                    'message'=>'住所が未入力です',
                ),

                //バリデーション名
                'maxlength'=>array(
                    //バリデーションのルール
                    'rule'=>array('maxlength',300,),
                    'required'=> 'true',
                    'mesage'=>'200文字以内で入力してください'
                ),           
            ),
            //フィールド名    
            'phone' => array(
                'notBlank'=>array(          
                    'rule' => ['notblank'],
                    'message' => '電話番号が未入力です',
                    'allowEmpty' => true
                 ),   
            ),
            //フィールド名
            'email'=>array(
                //バリデーション名
                'notBlank'=>array(
                    //バリデーションのルール
                    'rule'=>array('notBlank'),
                    'required'=>'true',
                    'message'=>'メールアドレスが未入力です',
                ), 
                //バリデーション名
                'email'=>array(
                    //バリデーションのルール
                    'rule'=>array('email'),
                    'message'=>'メールアドレスの形式を入力してください',
                    'required'=>'true',
                ),
                //バリデーション名
                'maxlength'=>array(
                    //バリデーションのルール
                    'rule'=>array('maxlength',250),
                    'required'=> 'true',
                    'mesage'=>'250文字以内で入力してください'
                ),
            ),
            //フィールド名
            'body'=>array(
                //バリデーション名
                'notBlank'=>array(
                    //バリデーションのルール
                    'rule'=>array('notBlank'),
                    'required'=>'true',
                    'message'=>'内容が未入力です',
                ), 
                //バリデーション名
                'maxlength'=>array(
                    //バリデーションのルール
                    'rule'=>array('maxlength',3000),
                    'required'=> 'true',
                    'mesage'=>'3000文字以内で入力してください'
                ),            
            ),
        );
    
    

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
