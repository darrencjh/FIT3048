<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients view content">
            <h3><?= h($client->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($client->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Full Name') ?></th>
                    <td><?= h($client->full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Other Names') ?></th>
                    <td><?= h($client->other_names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Birth') ?></th>
                    <td><?= h($client->date_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occupation') ?></th>
                    <td><?= h($client->occupation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($client->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Address') ?></th>
                    <td><?= h($client->postal_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($client->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($client->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referred By') ?></th>
                    <td><?= h($client->referred_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Will Text') ?></th>
                    <td><?= h($client->will_text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Powers Text') ?></th>
                    <td><?= h($client->powers_text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Binding Text') ?></th>
                    <td><?= h($client->binding_text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Will') ?></th>
                    <td><?= $client->is_will ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Powers') ?></th>
                    <td><?= $client->is_powers ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Binding') ?></th>
                    <td><?= $client->is_binding ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
