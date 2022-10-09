<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admins
 */

echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css',['block'=>true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block'=>true]);

?>
<script>
    //table to display
    $(()=>{
        $('#adminTable').DataTable();
    } );
</script>
<div class="admins index content">
    <?= $this->Html->link(__('<span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span><span class="text">Add new Admin</span>'), ['action' => 'add'],['class' => 'btn btn-success btn-icon-split float-right','escape'=>false]) ?>
    <h3><?= __('Admins') ?></h3>
    <div class="table-responsive">
<!--        <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">-->
        <table id="adminTable">
            <thead>
                <tr>
                    <th>username</th>
                    <th>email</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admins as $admin): ?>
                <tr>
<!--                    substr($admin->id,0,8)-->
                    <td><?= h($admin->username) ?></td>
                    <td><?= h($admin->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fas fa-info"></i>'), ['action' => 'view', $admin->id],['class'=>"btn btn-success btn-circle btn-sm",'escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="fas fa-edit"></i>'), ['action' => 'edit', $admin->id],['class'=>"btn btn-info btn-circle btn-sm",'escape'=>false]) ?>
                        <?php if(count($admins)>1 && $admin->username!='leonie'){ echo $this->Form->postLink(__('<i class="fas fa-trash"></i>'), ['action' => 'delete', $admin->id],  ['class'=>"btn btn-danger btn-circle btn-sm button-delete-client",'escape'=>false,'confirm' => __('Are you sure you want to delete Admin {0}?', $admin->username)]); }?>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
