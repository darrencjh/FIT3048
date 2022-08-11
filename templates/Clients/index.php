<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="clients index content">
    <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('full_name') ?></th>
                    <th><?= $this->Paginator->sort('other_names') ?></th>
                    <th><?= $this->Paginator->sort('date_birth') ?></th>
                    <th><?= $this->Paginator->sort('occupation') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('postal_address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('referred_by') ?></th>
                    <th><?= $this->Paginator->sort('is_will') ?></th>
                    <th><?= $this->Paginator->sort('is_powers') ?></th>
                    <th><?= $this->Paginator->sort('is_binding') ?></th>
                    <th><?= $this->Paginator->sort('will_text') ?></th>
                    <th><?= $this->Paginator->sort('powers_text') ?></th>
                    <th><?= $this->Paginator->sort('binding_text') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= h($client->id) ?></td>
                    <td><?= h($client->full_name) ?></td>
                    <td><?= h($client->other_names) ?></td>
                    <td><?= h($client->date_birth) ?></td>
                    <td><?= h($client->occupation) ?></td>
                    <td><?= h($client->address) ?></td>
                    <td><?= h($client->postal_address) ?></td>
                    <td><?= h($client->email) ?></td>
                    <td><?= h($client->phone) ?></td>
                    <td><?= h($client->referred_by) ?></td>
                    <td><?= h($client->is_will) ?></td>
                    <td><?= h($client->is_powers) ?></td>
                    <td><?= h($client->is_binding) ?></td>
                    <td><?= h($client->will_text) ?></td>
                    <td><?= h($client->powers_text) ?></td>
                    <td><?= h($client->binding_text) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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
