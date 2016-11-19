
<?php $this->start('topimage')?>
<div class="pageimage3"> </div>
<?php $this->end();?>
    
    


<div class ="row">
    <div class ="col-md-8 col-md-offset-2">

    <?= $this->Form->create('JobSearch',array('url'=>'wanted','novalidate'=>'novalidate'));?>
    <?= $this->Form->input('keyword',array(
        'label'=>'キーワード',                
    ));?>
    <?= $this->Form->end('検索');?>    
    </div>
</div>

<div class ="row">
    <div class ="col-md-8 col-md-offset-2">
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
                    <td><?php echo h($job['Job']['id']); ?> </td>
                    <td><?php echo h($job['Job']['title']); ?></td>
                    <td><?php echo h($job['Job']['campanyname']); ?></td>
                    <td><?php echo h($job['Job']['salary']). '万円'; ?></td>
                    <td><?php echo h($job['Category']['name']); ?></td>
                    <td><?= $this->Html->link('詳細表示', array('action' => 'view', $job['Job']['id']));?></td>
                    <td align="center">
            <?php endforeach;?>
    </table>
        
    <div class="paging">
        <center>
        <?php
            echo $this->Paginator->prev('< ' . '前', array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next('次' . ' >', array(), null, array('class' => 'next disabled'));
        ?>            
        </center>
	</div>        
    </div> 
</div>

<p> hugahuga</p>
<p class="mb1">