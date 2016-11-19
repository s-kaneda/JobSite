<div class="jobs view">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
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
                    <th>カテゴリ</th>
                    <td><?php echo h($job['Category']['name']); ?></td>
                </tr>
                
                <?= $this->Html->link('戻る',array('action'=> 'wanted'));?>

            </table>
                <?= $this->Html->link('この求人に応募する',array('action'=>'contact',$job['Job']['id']),['class'=>'btn btn-primary']);?>
   
        </div>
        
    </div>
    <p class="mb3"> </p>
</div>

