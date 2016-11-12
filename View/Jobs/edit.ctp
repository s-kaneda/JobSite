<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo __('Edit Job'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
        echo $this->Form->input('campanyname');
		echo $this->Form->input('description');
        echo $this->Form->input('salary');?>
        <div class="form-group">
           <?= $this->Form->input('category_id',[
                    'type'=>'select',                
                    'options' => $category_list,                                          
                    'class' => 'form-control',
                    ]
                ); 
            ?>                
        </div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Job.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Job.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
	</ul>
</div>
