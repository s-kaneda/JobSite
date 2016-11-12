<div class="jobs view">
    <h2 style="margin-bottom: 20px;">求人詳細</h2>
 
    <table class="table table-bordered">

        <tr>
            <th style="width: 30%">Id</th>
            <td><?php echo h($job['Job']['id']); ?></td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td><?php echo h($job['Job']['title']); ?></td>
        </tr>		
        <tr>
            <th>会社名</th>
            <td><?php echo h($job['Job']['campanyname']); ?></td>            
        </tr>

        <tr>
            <th>内容</th>
            <td><?php echo h($job['Job']['description']); ?></td>            
        </tr>
        <tr>
            <th>年収</th>
            <td><?php echo h($job['Job']['salary']); ?></td>
        </tr>           		
        <tr>
            <th>修正</th>
            <td><?php echo h($job['Category']['name']); ?></td>
        </tr>
        
    </table>
</div>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $job['Job']['id']))); ?> </li>
            <li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
        </ul>
    </div>
