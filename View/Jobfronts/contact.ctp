     <div class="row"> 
         <div class="col-md-6 col-md-offset-3">
             <h2>応募画面</h2>
             
             <h4 style="color: blue">内容表示</h4>
             
                 <p><?= $job['Job']['title'];?></p>
                 <p><?= $job['Job']['campanyname'];?></p>   
           
             
             
            <?= $this->Form->create('Contact',['novalidate' => 'novalidate']);?>
             <div class="form-group" style="width: 300px" >
                <?= $this->Form->input('name',[
                            'type'=>'text',
                            'label'=>'お名前',
                            'maxlength'=>200,
                            'class' => 'form-control',
                            'placeholder' => 'username',
                        ]
                    );
                ?>      
            </div>
             
             <div class="form-group" style="width: 50px" >            
                <?= $this->Form->input('age',[
                            'type'=>'text',
                            'label'=>'年齢',
                            'maxlength'=>3,
                            'class' => 'form-control',
                            'placeholder' => '22',
                        ]
                    );
                ?>      
            </div>
             <div class="form-group">            
                <?= $this->Form->input('adress',[
                            'type'=>'text',
                            'label'=>'住所',
                            'maxlength'=>300,
                            'class' => 'form-control',
                            'placeholder' => '東京都台東区',
                        ]
                    );
                ?>      
            </div>
             
             <div class="form-group" style="width: 500px">
                <?= $this->Form->input('email',[
                            'type'=>'email',
                            'label'=>'メールアドレス',
                            'maxlength'=>250,
                            'class'=>'form-control',
                            'placeholder'=> 'hoge@example.com',                
                        ]
                    );
                ?>        
            </div>
             
            <div class="form-group">
                <?= $this->Form->input('body',[
                            'type'=>'textarea',
                            'label'=>'備考',
                            'maxlength'=>3000,
                            'class'=>'form-control',
                            'placeholder'=> '備考',
                        ]
                    );
                ?>        
            </div>                
                <?php echo $this->Form->hidden('job_id',[                    
                    'value'=>$job['Job']['id'],                                       
                    ]                    
                    ); ?>
            
                <?= $this->Form->end('送信',['class'=>'btn btn-primary']);?>
         </div>
            
         
         
                   
    </div>

