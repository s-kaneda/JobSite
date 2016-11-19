<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo __('Add Job'); ?></legend>
	
		<?= $this->Form->input('title');?>
		<?= $this->Form->input('description');?>
        <?= $this->Form->input('campanyname');?>		
        <?= $this->Form->input('salary'); ?>
        <div class="form-group">
            
           <?= $this->Form->input('category_id',[
                    'type'=>'select',                
                    'options' => $category_list,                                          
                    'class' => 'form-control',
//                    'label' =>'category_id',
                    ]
                ); 
            ?>                
        </div>
        
           
        
            

	</fieldset>
<?php echo $this->Form->end('編集'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
	</ul>
</div>
