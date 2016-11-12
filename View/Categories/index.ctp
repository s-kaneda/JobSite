<div class="categories index">
	<h2>カテゴリ一覧</h2>    
        <div align="right">
            
        <?php if($login_user['role'] =='admin') :?>    
        <button class="btn btn-default">           
            <?php echo $this->Html->link('新規追加', array('action' => 'add')); ?>
        <?php endif ; ?>
        </button>
        </div>
        
        <table class="table table-striped">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
                <th><?php echo $this->Paginator->sort('name','名前'); ?></th>
                <th><?php echo $this->Paginator->sort('created','作成日'); ?></th>
                <th class="light"></th>        
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo h($category['Category']['id']); ?></td>
                    <td><?php echo h($category['Category']['name']); ?></td>
                    <td><?php echo h($category['Category']['created']); ?></td>
                    <td align="center">
                        <button type="button" class="btn btn-default"><?php echo $this->Html->link('詳細', array('action' => 'view', $category['Category']['id'])); ?></button>&ensp; 
                        <?php if($login_user['role'] =='admin'):?>
                        <button type="button" class="btn btn-default"><?php echo $this->Html->link('編集', array('action' => 'edit', $category['Category']['id'])); ?></button>&nbsp;                        
                        <button type="button" class="btn btn-danger"><?php echo $this->Form->postLink('削除', array('action' => 'delete', $category['Category']['id']), array('confirm' => '本当に削除してもよろしいですか?', $category['Category']['id'])); ?></button>
                        <?php endif ;?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
	<?php
		echo $this->Paginator->prev('< ' .'前', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next('次' . ' >', array(), null, array('class' => 'next disabled'));
	?>
	
</div>

