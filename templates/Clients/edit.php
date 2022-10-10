<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <div class="column-responsive column-80 ml-5">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Edit Client') ?></legend>

                <div class="mb-3">
                    <div class="label required">
                        <label>Full Name</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="text" id="clientFullName" name="clientFullName" value="<?= $client->full_name?>" required>
                    <div class="invalid-feedback" id="nameError">Please check your name</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Previous Name</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="text" id="clientPrevName" name="clientPrevName" value="<?= $client->previous_name?>">
                    <div class="invalid-feedback" id="nameError">Please check your name</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Date of Birth</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="text" id="date_of_birth" name="date_of_birth" onfocus="(this.type='date')" onblur="(this.type='text', this.value='<?= $client->date_of_birth?>')" value="<?= $client->date_of_birth?>" required>
                    <div class="invalid-feedback" id="dateError">Please check your booking date</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Occupation</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="text" id="occupation" name="occupation" value="<?= $client->occupation?>" required>
                    <div class="invalid-feedback" id="occupationError">Please check your occupation</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Home Address</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="text" id="home_address" name="home_address" value="<?= $client->home_address?>" required>
                    <div class="invalid-feedback" id="homeAddressError">Please check your home address</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Postal Address</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="text" id="postal_address" name="postal_address" value="<?= $client->postal_address?>">
                    <div class="invalid-feedback" id="postalAddressError">Please check your postal address</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Email</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="clientEmail" name="clientEmail" value="<?= $client->email?>" required>
                    <div class="invalid-feedback" id="emailError">Please check your email</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Phone</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="clientPhone" name="clientPhone" value="<?= $client->phone?>" required>
                    <div class="invalid-feedback" id="phoneError">Please check your phone number</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Has Will?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientHasWill" name="clientHasWill" value="<?= $client->has_will?>">
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Has Powers of Attorney?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientHasPowers" name="clientHasPowers" value="<?= $client->has_power?>">
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Has Binding Death Benefit Nominations?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientHasBinding" name="clientHasBinding" value="<?= $client->has_binding?>">
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Has Existing Medical Treatment Decision Maker?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientHasDecisionMaker" name="clientHasDecisionMaker" value="<?= $client->has_decision_maker?>">
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Has Copy of Self Managed Superannuation Trust Deed?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientHasSuperAnnuDeed" name="clientHasSuperAnnuDeed" value="<?= $client->has_superannu_deed?>">
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Has Copy of Family Trust Deed?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientHasFamilyTrustDeed" name="clientHasFamilyTrustDeed" value="<?= $client->has_family_deed?>" >
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Office Holder of any Private Companies?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientIsOfficeHolder" name="clientIsOfficeHolder" value="<?= $client->is_office_holder?>">
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Beneficiary/Trustee of any trusts?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientIsBeneficiary" name="clientIsBeneficiary" value="<?= $client->is_beneficiary?>">
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>In a business partnership?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientInPartnership" name="clientInPartnership" value="<?= $client->in_partnership?>">
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Have brain-related disorders, memory loss or confusion; or medication that impacts cognitive function?</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="checkbox" id="clientInPartnership" name="clientInPartnership" value="<?= $client->in_partnership?>">
                </div>


<!--                php form code-->
<!--                    echo $this->Form->control('full_name');-->
<!--                    echo $this->Form->control('previous_name');-->
<!--                    echo $this->Form->control('date_of_birth');-->
<!--                    echo $this->Form->control('occupation');-->
<!--                    echo $this->Form->control('home_address');-->
<!--                    echo $this->Form->control('postal_address');-->
<!--                    echo $this->Form->control('email');-->
<!--                    echo $this->Form->control('phone');-->
<!--                    echo $this->Form->control('has_will');-->
<!--                    echo $this->Form->control('has_power');-->
<!--                    echo $this->Form->control('has_binding');-->
<!--                    echo $this->Form->control('has_decision_maker');-->
<!--                    echo $this->Form->control('has_superannu_deed');-->
<!--                    echo $this->Form->control('has_family_deed');-->
<!--                    echo $this->Form->control('is_office_holder');-->
<!--                    echo $this->Form->control('is_beneficiary');-->
<!--                    echo $this->Form->control('in_partnership');-->
<!--                    echo $this->Form->control('is_health');-->
<!--                    echo $this->Form->control('health_desc');-->
<!--                    echo $this->Form->control('relationship_status');-->
<!--                    echo $this->Form->control('married_fullName');-->
<!--                    echo $this->Form->control('married_dob', ['empty' => true]);-->
<!--                    echo $this->Form->control('married_phone');-->
<!--                    echo $this->Form->control('defacto_fullName');-->
<!--                    echo $this->Form->control('defacto_living', ['empty' => true]);-->
<!--                    echo $this->Form->control('defacto_mariage');-->
<!--                    echo $this->Form->control('sepdiv_property_settlement');-->
<!--                    echo $this->Form->control('has_child_current');-->
<!--                    echo $this->Form->control('has_child_prev');-->
<!--                    echo $this->Form->control('has_household_member');-->
<!--                    echo $this->Form->control('has_financial_dependent');-->
<!--                    echo $this->Form->control('has_accountant');-->
<!--                    echo $this->Form->control('accountant_name');-->
<!--                    echo $this->Form->control('accountant_firm');-->
<!--                    echo $this->Form->control('accountant_email');-->
<!--                    echo $this->Form->control('accountant_help');-->
<!--                    echo $this->Form->control('has_adviser');-->
<!--                    echo $this->Form->control('adviser_name');-->
<!--                    echo $this->Form->control('adviser_firm');-->
<!--                    echo $this->Form->control('adviser_email');-->
<!--                    echo $this->Form->control('adviser_help');-->
<!--                    echo $this->Form->control('referrer_source');-->
<!--                    echo $this->Form->control('referrer_name');-->
<!--                    echo $this->Form->control('referrer_firm');-->
<!--                    echo $this->Form->control('referrer_email');-->
<!--                    echo $this->Form->control('details_youowe');-->
<!--                    echo $this->Form->control('has_owe_agreement');-->
<!--                    echo $this->Form->control('details_youowed');-->
<!--                    echo $this->Form->control('has_owed_agreement');-->
<!--                    echo $this->Form->control('repay_estate');-->
<!--                    echo $this->Form->control('insure_house');-->
<!--                    echo $this->Form->control('insure_house_company');-->
<!--                    echo $this->Form->control('insure_vehicle');-->
<!--                    echo $this->Form->control('insure_vehicle_company');-->
<!--                    echo $this->Form->control('insure_health');-->
<!--                    echo $this->Form->control('insure_health_company');-->
<!--                    echo $this->Form->control('insure_life');-->
<!--                    echo $this->Form->control('insure_life_company');-->
<!--                    echo $this->Form->control('wish_appoint_child');-->
<!--                    echo $this->Form->control('surviving_parent_fullname');-->
<!--                    echo $this->Form->control('guardian_fullname');-->
<!--                    echo $this->Form->control('guardian_relation');-->
<!--                    echo $this->Form->control('wish_property_special');-->
<!--                    echo $this->Form->control('way_attorney_decision');-->
<!--                    echo $this->Form->control('addition_notes');-->

            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
