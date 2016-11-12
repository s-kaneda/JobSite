<div class="jobs index">
	<h2>求人一覧</h2>
        <div align="right">
            
        <?php if($login_user['role'] =='admin') :?>    
            <?php echo $this->Html->link('新規追加', array('action' => 'add'),['class' => 'btn btn-default']); ?>
        <?php endif ; ?>        
        </div>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>会社名</th>
                <th>年収</th>
                <th>カテゴリ</th>
                
                <th class="light"></th>        
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobs as $job): ?>
                <tr>
                    <td><?php echo h($job['Job']['id']); ?></td>
                    <td><?php echo h($job['Job']['title']); ?></td>
                    <td><?php echo h($job['Job']['campanyname']); ?></td>
                    <td><?php echo h($job['Job']['salary']). '万円'; ?></td>
                    <td><?php echo h($job['Category']['name']); ?></td>
                    <td align="center">
                        <?php echo $this->Html->link('詳細', array('action' => 'view', $job['Job']['id']),['class' => 'btn btn-default']); ?>&ensp; 
                        <?php if($login_user['role'] =='admin'):?>
                        <?php echo $this->Html->link('編集', array('action' => 'edit', $job['Job']['id']),['class' => 'btn btn-default']); ?>&nbsp;                        
                        <?php echo $this->Form->postLink('削除', array('action' => 'delete', $job['Job']['id']),['class' => 'btn btn-danger'], array('confirm' => '本当に削除してもよろしいですか?', $job['Job']['id'])); ?>
                        <?php endif ;?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . '前', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next('次' . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
