<div class="list-group">
    <center>
    <a href="#" class="list-group-item active">        
        Menu    
    </a>
    
        <?= $this->Html->link(
            'ユーザー',[
                'controller' => 'users',
                'action' => 'index',
            ], ['class'=>'list-group-item']

        );?>
        <?= $this->Html->link(
            'お知らせ',[
                'controller' => 'posts',
                'action' => 'index',
            ], ['class'=>'list-group-item']
        );?>
                
        <?= $this->Html->link(
            '求人',[
                'controller' => 'jobs',
                'action' => 'index',
            ], ['class'=>'list-group-item']
        );?>

        <?= $this->Html->link(
            'カテゴリ',[
                'controller' => 'categories',
                'action' => 'index',
            ], ['class'=>'list-group-item']
        );?>
        
    </center>
</div>