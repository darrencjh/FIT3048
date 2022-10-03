<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <div class="column-responsive column-80 ml-5">
        <div class="clients view content">
            <h3><?= h($client->full_name) ?></h3>
            <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Full Name') ?></th>
                    <td><?= h($client->full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Previous Name') ?></th>
                    <td><?= h($client->previous_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Previous Name') ?></th>
                    <td><?= h($client->date_of_birth) ?></td>
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
                    <th><?= __('Referrer Source') ?></th>
                    <td><?= h($client->referrer_source) ?></td>
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
                    <th><?= __('Wish Appoint Child') ?></th>
                    <td><?= $client->wish_appoint_child ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Wish Property Special') ?></th>
                    <td><?= $client->wish_property_special ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Details You Owe') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->details_youowe)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Details You Owed') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->details_youowed)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Additional Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->addition_notes)); ?>
                </blockquote>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Householders') ?></h4>
                <?php if (!empty($client->householders)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th><?= __('Full Name') ?></th>
                            <th><?= __('Relationship') ?></th>
                        </tr>
                        <?php foreach ($client->householders as $householders) : ?>
                        <tr>
                            <td><?= h($householders->full_name) ?></td>
                            <td><?= h($householders->relationship) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Dependents') ?></h4>
                <?php if (!empty($client->dependents)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Full Name') ?></th>
                            <th><?= __('Relationship') ?></th>
                            <th><?= __('Nature') ?></th>
                        </tr>
                        <?php foreach ($client->dependents as $dependents) : ?>
                        <tr>
                            <td><?= h($dependents->full_name) ?></td>
                            <td><?= h($dependents->relationship) ?></td>
                            <td><?= h($dependents->nature) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Children') ?></h4>
                <?php if (!empty($client->children)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th><?= __('Full Name') ?></th>
                            <th><?= __('Date of Birth') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Mother') ?></th>
                            <th><?= __('Father') ?></th>
                        </tr>
                        <?php foreach ($client->children as $children) : ?>
                        <tr>
                            <td><?= h($children->full_name) ?></td>
                            <td><?= h($children->age) ?></td>
                            <td><?= h($children->address) ?></td>
                            <td><?= h($children->mother) ?></td>
                            <td><?= h($children->father) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>

            </div>
            <div class="related mb-4">
                <h4><?= __('Related Grandchildren') ?></h4>
                <?php if (!empty($client->grandchildren)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th><?= __('Full Name') ?></th>
                            <th><?= __('Date of Birth') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Mother') ?></th>
                            <th><?= __('Father') ?></th>
                        </tr>
                        <?php foreach ($client->grandchildren as $grandchildren) : ?>
                        <tr>
                            <td><?= h($grandchildren->full_name) ?></td>
                            <td><?= h($grandchildren->age) ?></td>
                            <td><?= h($grandchildren->address) ?></td>
                            <td><?= h($grandchildren->mother) ?></td>
                            <td><?= h($grandchildren->father) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Estates') ?></h4>
                <?php if (!empty($client->estates)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Owner') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Mortgage') ?></th>
                            <th><?= __('Value') ?></th>
                        </tr>
                        <?php foreach ($client->estates as $estates) : ?>
                        <tr>
                            <td><?= h($estates->address) ?></td>
                            <td><?= h($estates->owner) ?></td>
                            <td><?= h($estates->type) ?></td>
                            <td><?= h($estates->location) ?></td>
                            <td><?= h($estates->mortgage) ?></td>
                            <td><?= h($estates->value) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Bankaccounts') ?></h4>
                <?php if (!empty($client->bankaccounts)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Bank') ?></th>
                            <th><?= __('Account Holder') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Value') ?></th>
                        </tr>
                        <?php foreach ($client->bankaccounts as $bankaccounts) : ?>
                        <tr>
                            <td><?= h($bankaccounts->bank) ?></td>
                            <td><?= h($bankaccounts->holder) ?></td>
                            <td><?= h($bankaccounts->type) ?></td>
                            <td><?= h($bankaccounts->value) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Vehicles') ?></h4>
                <?php if (!empty($client->vehicles)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Make') ?></th>
                            <th><?= __('Model') ?></th>
                            <th><?= __('Year') ?></th>
                        </tr>
                        <?php foreach ($client->vehicles as $vehicles) : ?>
                        <tr>
                            <td><?= h($vehicles->make) ?></td>
                            <td><?= h($vehicles->model) ?></td>
                            <td><?= h($vehicles->year) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Investments') ?></h4>
                <?php if (!empty($client->investments)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Held') ?></th>
                            <th><?= __('Value') ?></th>
                        </tr>
                        <?php foreach ($client->investments as $investments) : ?>
                        <tr>
                            <td><?= h($investments->type) ?></td>
                            <td><?= h($investments->held) ?></td>
                            <td><?= h($investments->value) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Superannuations') ?></h4>
                <?php if (!empty($client->superannuations)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Fund') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Nomination') ?></th>
                            <th><?= __('Binding') ?></th>
                        </tr>
                        <?php foreach ($client->superannuations as $superannuations) : ?>
                        <tr>
                            <td><?= h($superannuations->fund) ?></td>
                            <td><?= h($superannuations->value) ?></td>
                            <td><?= h($superannuations->nomination) ?></td>
                            <td><?= h($superannuations->binding) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Executors') ?></h4>
                <?php if (!empty($client->executors)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Relation') ?></th>
                        </tr>
                        <?php foreach ($client->executors as $executors) : ?>
                        <tr>
                            <td><?= h($executors->name) ?></td>
                            <td><?= h($executors->address) ?></td>
                            <td><?= h($executors->relation) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Altexecutors') ?></h4>
                <?php if (!empty($client->altexecutors)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Relation') ?></th>
                        </tr>
                        <?php foreach ($client->altexecutors as $altexecutors) : ?>
                        <tr>
                            <td><?= h($altexecutors->name) ?></td>
                            <td><?= h($altexecutors->address) ?></td>
                            <td><?= h($altexecutors->relation) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Bequests') ?></h4>
                <?php if (!empty($client->bequests)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                        </tr>
                        <?php foreach ($client->bequests as $bequests) : ?>
                        <tr>
                            <td><?= h($bequests->name) ?></td>
                            <td><?= h($bequests->description) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Beneficiaries') ?></h4>
                <?php if (!empty($client->beneficiaries)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Relation') ?></th>
                            <th><?= __('Situation') ?></th>
                        </tr>
                        <?php foreach ($client->beneficiaries as $beneficiaries) : ?>
                        <tr>
                            <td><?= h($beneficiaries->name) ?></td>
                            <td><?= h($beneficiaries->relation) ?></td>
                            <td><?= h($beneficiaries->situation) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Attorneys') ?></h4>
                <?php if (!empty($client->attorneys)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Relation') ?></th>
                        </tr>
                        <?php foreach ($client->attorneys as $attorneys) : ?>
                        <tr>
                            <td><?= h($attorneys->name) ?></td>
                            <td><?= h($attorneys->relation) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Altattorneys') ?></h4>
                <?php if (!empty($client->altattorneys)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Relation') ?></th>
                        </tr>
                        <?php foreach ($client->altattorneys as $altattorneys) : ?>
                        <tr>
                            <td><?= h($altattorneys->name) ?></td>
                            <td><?= h($altattorneys->relation) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

            <div class="related mb-4">
                <h4><?= __('Related Decisionmakers') ?></h4>
                <?php if (!empty($client->decisionmakers)) : ?>
                <div class="table table-bordered table-striped table-hover">
                    <table>
                        <tr>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Dob') ?></th>
                            <th><?= __('Phone') ?></th>
                        </tr>
                        <?php foreach ($client->decisionmakers as $decisionmakers) : ?>
                        <tr>
                            <td><?= h($decisionmakers->name) ?></td>
                            <td><?= h($decisionmakers->dob) ?></td>
                            <td><?= h($decisionmakers->phone) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
