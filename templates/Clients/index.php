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
                    <th><?= $this->Paginator->sort('previous_name') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('occupation') ?></th>
                    <th><?= $this->Paginator->sort('home_address') ?></th>
                    <th><?= $this->Paginator->sort('postal_address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('has_will') ?></th>
                    <th><?= $this->Paginator->sort('has_power') ?></th>
                    <th><?= $this->Paginator->sort('has_binding') ?></th>
                    <th><?= $this->Paginator->sort('has_decision_maker') ?></th>
                    <th><?= $this->Paginator->sort('has_superannu_deed') ?></th>
                    <th><?= $this->Paginator->sort('has_family_deed') ?></th>
                    <th><?= $this->Paginator->sort('is_office_holder') ?></th>
                    <th><?= $this->Paginator->sort('is_beneficiary') ?></th>
                    <th><?= $this->Paginator->sort('in_partnership') ?></th>
                    <th><?= $this->Paginator->sort('is_health') ?></th>
                    <th><?= $this->Paginator->sort('health_desc') ?></th>
                    <th><?= $this->Paginator->sort('relationship_status') ?></th>
                    <th><?= $this->Paginator->sort('married_fullName') ?></th>
                    <th><?= $this->Paginator->sort('married_dob') ?></th>
                    <th><?= $this->Paginator->sort('married_phone') ?></th>
                    <th><?= $this->Paginator->sort('defacto_fullName') ?></th>
                    <th><?= $this->Paginator->sort('defacto_living') ?></th>
                    <th><?= $this->Paginator->sort('defacto_mariage') ?></th>
                    <th><?= $this->Paginator->sort('sepdiv_property_settlement') ?></th>
                    <th><?= $this->Paginator->sort('has_child_current') ?></th>
                    <th><?= $this->Paginator->sort('has_child_prev') ?></th>
                    <th><?= $this->Paginator->sort('has_household_member') ?></th>
                    <th><?= $this->Paginator->sort('has_financial_dependent') ?></th>
                    <th><?= $this->Paginator->sort('has_accountant') ?></th>
                    <th><?= $this->Paginator->sort('accountant_name') ?></th>
                    <th><?= $this->Paginator->sort('accountant_firm') ?></th>
                    <th><?= $this->Paginator->sort('accountant_email') ?></th>
                    <th><?= $this->Paginator->sort('accountant_help') ?></th>
                    <th><?= $this->Paginator->sort('has_adviser') ?></th>
                    <th><?= $this->Paginator->sort('adviser_name') ?></th>
                    <th><?= $this->Paginator->sort('adviser_firm') ?></th>
                    <th><?= $this->Paginator->sort('adviser_email') ?></th>
                    <th><?= $this->Paginator->sort('adviser_help') ?></th>
                    <th><?= $this->Paginator->sort('referrer_source') ?></th>
                    <th><?= $this->Paginator->sort('referrer_name') ?></th>
                    <th><?= $this->Paginator->sort('referrer_firm') ?></th>
                    <th><?= $this->Paginator->sort('referrer_email') ?></th>
                    <th><?= $this->Paginator->sort('has_owe_agreement') ?></th>
                    <th><?= $this->Paginator->sort('has_owed_agreement') ?></th>
                    <th><?= $this->Paginator->sort('repay_estate') ?></th>
                    <th><?= $this->Paginator->sort('insure_house') ?></th>
                    <th><?= $this->Paginator->sort('insure_house_company') ?></th>
                    <th><?= $this->Paginator->sort('insure_vehicle') ?></th>
                    <th><?= $this->Paginator->sort('insure_vehicle_company') ?></th>
                    <th><?= $this->Paginator->sort('insure_health') ?></th>
                    <th><?= $this->Paginator->sort('insure_health_company') ?></th>
                    <th><?= $this->Paginator->sort('insure_life') ?></th>
                    <th><?= $this->Paginator->sort('insure_life_company') ?></th>
                    <th><?= $this->Paginator->sort('wish_appoint_child') ?></th>
                    <th><?= $this->Paginator->sort('surviving_parent_fullname') ?></th>
                    <th><?= $this->Paginator->sort('guardian_fullname') ?></th>
                    <th><?= $this->Paginator->sort('guardian_relation') ?></th>
                    <th><?= $this->Paginator->sort('wish_property_special') ?></th>
                    <th><?= $this->Paginator->sort('way_attorney_decision') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= h($client->id) ?></td>
                    <td><?= h($client->full_name) ?></td>
                    <td><?= h($client->previous_name) ?></td>
                    <td><?= h($client->date_of_birth) ?></td>
                    <td><?= h($client->occupation) ?></td>
                    <td><?= h($client->home_address) ?></td>
                    <td><?= h($client->postal_address) ?></td>
                    <td><?= h($client->email) ?></td>
                    <td><?= h($client->phone) ?></td>
                    <td><?= h($client->has_will) ?></td>
                    <td><?= h($client->has_power) ?></td>
                    <td><?= h($client->has_binding) ?></td>
                    <td><?= h($client->has_decision_maker) ?></td>
                    <td><?= h($client->has_superannu_deed) ?></td>
                    <td><?= h($client->has_family_deed) ?></td>
                    <td><?= h($client->is_office_holder) ?></td>
                    <td><?= h($client->is_beneficiary) ?></td>
                    <td><?= h($client->in_partnership) ?></td>
                    <td><?= h($client->is_health) ?></td>
                    <td><?= h($client->health_desc) ?></td>
                    <td><?= h($client->relationship_status) ?></td>
                    <td><?= h($client->married_fullName) ?></td>
                    <td><?= h($client->married_dob) ?></td>
                    <td><?= h($client->married_phone) ?></td>
                    <td><?= h($client->defacto_fullName) ?></td>
                    <td><?= h($client->defacto_living) ?></td>
                    <td><?= h($client->defacto_mariage) ?></td>
                    <td><?= h($client->sepdiv_property_settlement) ?></td>
                    <td><?= h($client->has_child_current) ?></td>
                    <td><?= h($client->has_child_prev) ?></td>
                    <td><?= h($client->has_household_member) ?></td>
                    <td><?= h($client->has_financial_dependent) ?></td>
                    <td><?= h($client->has_accountant) ?></td>
                    <td><?= h($client->accountant_name) ?></td>
                    <td><?= h($client->accountant_firm) ?></td>
                    <td><?= h($client->accountant_email) ?></td>
                    <td><?= h($client->accountant_help) ?></td>
                    <td><?= h($client->has_adviser) ?></td>
                    <td><?= h($client->adviser_name) ?></td>
                    <td><?= h($client->adviser_firm) ?></td>
                    <td><?= h($client->adviser_email) ?></td>
                    <td><?= h($client->adviser_help) ?></td>
                    <td><?= h($client->referrer_source) ?></td>
                    <td><?= h($client->referrer_name) ?></td>
                    <td><?= h($client->referrer_firm) ?></td>
                    <td><?= h($client->referrer_email) ?></td>
                    <td><?= h($client->has_owe_agreement) ?></td>
                    <td><?= h($client->has_owed_agreement) ?></td>
                    <td><?= h($client->repay_estate) ?></td>
                    <td><?= h($client->insure_house) ?></td>
                    <td><?= h($client->insure_house_company) ?></td>
                    <td><?= h($client->insure_vehicle) ?></td>
                    <td><?= h($client->insure_vehicle_company) ?></td>
                    <td><?= h($client->insure_health) ?></td>
                    <td><?= h($client->insure_health_company) ?></td>
                    <td><?= h($client->insure_life) ?></td>
                    <td><?= h($client->insure_life_company) ?></td>
                    <td><?= h($client->wish_appoint_child) ?></td>
                    <td><?= h($client->surviving_parent_fullname) ?></td>
                    <td><?= h($client->guardian_fullname) ?></td>
                    <td><?= h($client->guardian_relation) ?></td>
                    <td><?= h($client->wish_property_special) ?></td>
                    <td><?= h($client->way_attorney_decision) ?></td>
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
