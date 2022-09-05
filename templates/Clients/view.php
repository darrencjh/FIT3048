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
                    <th><?= __('Previous Name') ?></th>
                    <td><?= h($client->previous_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Occupation') ?></th>
                    <td><?= h($client->occupation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Home Address') ?></th>
                    <td><?= h($client->home_address) ?></td>
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
                    <th><?= __('Health Desc') ?></th>
                    <td><?= h($client->health_desc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Relationship Status') ?></th>
                    <td><?= h($client->relationship_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Married FullName') ?></th>
                    <td><?= h($client->married_fullName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Married Phone') ?></th>
                    <td><?= h($client->married_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Defacto FullName') ?></th>
                    <td><?= h($client->defacto_fullName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accountant Name') ?></th>
                    <td><?= h($client->accountant_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accountant Firm') ?></th>
                    <td><?= h($client->accountant_firm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accountant Email') ?></th>
                    <td><?= h($client->accountant_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adviser Name') ?></th>
                    <td><?= h($client->adviser_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adviser Firm') ?></th>
                    <td><?= h($client->adviser_firm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adviser Email') ?></th>
                    <td><?= h($client->adviser_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referrer Name') ?></th>
                    <td><?= h($client->referrer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referrer Firm') ?></th>
                    <td><?= h($client->referrer_firm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referrer Email') ?></th>
                    <td><?= h($client->referrer_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Repay Estate') ?></th>
                    <td><?= h($client->repay_estate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Insure House Company') ?></th>
                    <td><?= h($client->insure_house_company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Insure Vehicle Company') ?></th>
                    <td><?= h($client->insure_vehicle_company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Insure Health Company') ?></th>
                    <td><?= h($client->insure_health_company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Insure Life Company') ?></th>
                    <td><?= h($client->insure_life_company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Surviving Parent Fullname') ?></th>
                    <td><?= h($client->surviving_parent_fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Fullname') ?></th>
                    <td><?= h($client->guardian_fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Relation') ?></th>
                    <td><?= h($client->guardian_relation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Way Attorney Decision') ?></th>
                    <td><?= h($client->way_attorney_decision) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($client->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Married Dob') ?></th>
                    <td><?= h($client->married_dob) ?></td>
                </tr>
                <tr>
                    <th><?= __('Defacto Living') ?></th>
                    <td><?= h($client->defacto_living) ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Will') ?></th>
                    <td><?= $client->has_will ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Power') ?></th>
                    <td><?= $client->has_power ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Binding') ?></th>
                    <td><?= $client->has_binding ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Decision Maker') ?></th>
                    <td><?= $client->has_decision_maker ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Superannu Deed') ?></th>
                    <td><?= $client->has_superannu_deed ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Family Deed') ?></th>
                    <td><?= $client->has_family_deed ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Health') ?></th>
                    <td><?= $client->is_health ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Defacto Mariage') ?></th>
                    <td><?= $client->defacto_mariage ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sepdiv Property Settlement') ?></th>
                    <td><?= $client->sepdiv_property_settlement ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Child Current') ?></th>
                    <td><?= $client->has_child_current ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Child Prev') ?></th>
                    <td><?= $client->has_child_prev ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Household Member') ?></th>
                    <td><?= $client->has_household_member ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Financial Dependent') ?></th>
                    <td><?= $client->has_financial_dependent ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Accountant') ?></th>
                    <td><?= $client->has_accountant ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Accountant Help') ?></th>
                    <td><?= $client->accountant_help ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Adviser') ?></th>
                    <td><?= $client->has_adviser ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Adviser Help') ?></th>
                    <td><?= $client->adviser_help ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Referrer') ?></th>
                    <td><?= $client->has_referrer ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Owe Agreement') ?></th>
                    <td><?= $client->has_owe_agreement ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Has Owed Agreement') ?></th>
                    <td><?= $client->has_owed_agreement ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Insure House') ?></th>
                    <td><?= $client->insure_house ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Insure Vehicle') ?></th>
                    <td><?= $client->insure_vehicle ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Insure Health') ?></th>
                    <td><?= $client->insure_health ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Insure Life') ?></th>
                    <td><?= $client->insure_life ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Office Holder') ?></th>
                    <td><?= $client->is_office_holder ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Beneficiary') ?></th>
                    <td><?= $client->is_beneficiary ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('In Partnership') ?></th>
                    <td><?= $client->in_partnership ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Wish Appoint Child') ?></th>
                    <td><?= $client->wish_appoint_child ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Wish Property Special') ?></th>
                    <td><?= $client->wish_property_special ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Details Youowe') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->details_youowe)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Details Youowed') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->details_youowed)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Addition Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->addition_notes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
