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
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('full_name');
                    echo $this->Form->control('previous_name');
                    echo $this->Form->control('date_of_birth');
                    echo $this->Form->control('occupation');
                    echo $this->Form->control('home_address');
                    echo $this->Form->control('postal_address');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('has_will');
                    echo $this->Form->control('has_power');
                    echo $this->Form->control('has_binding');
                    echo $this->Form->control('has_decision_maker');
                    echo $this->Form->control('has_superannu_deed');
                    echo $this->Form->control('has_family_deed');
                    echo $this->Form->control('is_office_holder');
                    echo $this->Form->control('is_beneficiary');
                    echo $this->Form->control('in_partnership');
                    echo $this->Form->control('is_health');
                    echo $this->Form->control('health_desc');
                    echo $this->Form->control('relationship_status');
                    echo $this->Form->control('married_fullName');
                    echo $this->Form->control('married_dob', ['empty' => true]);
                    echo $this->Form->control('married_phone');
                    echo $this->Form->control('defacto_fullName');
                    echo $this->Form->control('defacto_living', ['empty' => true]);
                    echo $this->Form->control('defacto_mariage');
                    echo $this->Form->control('sepdiv_property_settlement');
                    echo $this->Form->control('has_child_current');
                    echo $this->Form->control('has_child_prev');
                    echo $this->Form->control('has_household_member');
                    echo $this->Form->control('has_financial_dependent');
                    echo $this->Form->control('has_accountant');
                    echo $this->Form->control('accountant_name');
                    echo $this->Form->control('accountant_firm');
                    echo $this->Form->control('accountant_email');
                    echo $this->Form->control('accountant_help');
                    echo $this->Form->control('has_adviser');
                    echo $this->Form->control('adviser_name');
                    echo $this->Form->control('adviser_firm');
                    echo $this->Form->control('adviser_email');
                    echo $this->Form->control('adviser_help');
                    echo $this->Form->control('referrer_source');
                    echo $this->Form->control('referrer_name');
                    echo $this->Form->control('referrer_firm');
                    echo $this->Form->control('referrer_email');
                    echo $this->Form->control('details_youowe');
                    echo $this->Form->control('has_owe_agreement');
                    echo $this->Form->control('details_youowed');
                    echo $this->Form->control('has_owed_agreement');
                    echo $this->Form->control('repay_estate');
                    echo $this->Form->control('insure_house');
                    echo $this->Form->control('insure_house_company');
                    echo $this->Form->control('insure_vehicle');
                    echo $this->Form->control('insure_vehicle_company');
                    echo $this->Form->control('insure_health');
                    echo $this->Form->control('insure_health_company');
                    echo $this->Form->control('insure_life');
                    echo $this->Form->control('insure_life_company');
                    echo $this->Form->control('wish_appoint_child');
                    echo $this->Form->control('surviving_parent_fullname');
                    echo $this->Form->control('guardian_fullname');
                    echo $this->Form->control('guardian_relation');
                    echo $this->Form->control('wish_property_special');
                    echo $this->Form->control('way_attorney_decision');
                    echo $this->Form->control('addition_notes');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
