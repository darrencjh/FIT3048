<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admins
 */
?>
<div class="admins index content">
    <?= $this->Html->link(__('<span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span><span class="text">Add new Admin</span>'), ['action' => 'add'],['class' => 'btn btn-success btn-icon-split float-right','escape'=>false]) ?>
    <h3><?= __('Admins') ?></h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admins as $admin): ?>
                <tr>
                    <td><?= substr($admin->id,0,8) ?></td>
                    <td><?= h($admin->email) ?></td>
                    <td><?= h($admin->username) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fas fa-info"></i>'), ['action' => 'view', $admin->id],['class'=>"btn btn-success btn-circle btn-sm",'escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="fas fa-edit"></i>'), ['action' => 'edit', $admin->id],['class'=>"btn btn-info btn-circle btn-sm",'escape'=>false]) ?>
                        <?php if($admin->username!='jim'){ echo $this->Form->postLink(__('<i class="fas fa-trash"></i>'), ['action' => 'delete', $admin->id],  ['class'=>"btn btn-danger btn-circle btn-sm button-delete-client",'escape'=>false,'confirm' => __('Are you sure you want to delete Admin {0}?', $admin->username)]); }?>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
