<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="row">
    <div class="column-responsive column-80 ml-5">
        <div class="admins view content">
            <h3>Admin: <?= h($admin->username) ?></h3>
            <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($admin->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($admin->username) ?></td>
                </tr>
            </table>
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-lg btn-secondary']) ?>

        </div>
    </div>
</div>
