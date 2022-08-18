<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>





<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="container">

<div id="content">

    <div class="form-title">
        Wills & Estates Intake Form
    </div>
    <?= $this->Form->create($client, ["method" => "post"]) ?>
        <div class="ff-el-group">
            <h2>1. Basic Information</h2>
            <h4>1.1 Your Details</h4>
        </div>
        <div class="ff-cell">
                    <div class="column-1 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Given Name </label>
                            </div>
<<<<<<< HEAD
                            <div class="input">
                                <input type="text" name="full_name" class="input-control" placeholder="Ben " maxlength="20" required>
=======
                            <div class="">
                                <input type="text" name="full_name" id="inputGivenName"  class="form-control" maxlength="20" required />
                                <div class="invalid-feedback">Please provide your given name</div>

>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Last Name</label>
                            </div>
<<<<<<< HEAD
                            <div class="input">
                                <input type="text" name="other_names" class="input-control" placeholder="Simons  " maxlength="20" required>
=======
                            <div class="">
                                <input id="inputLastName" type="text" name="lastName" class="form-control" maxlength="20" required />
                                <div class="invalid-feedback">Please provide your last name</div>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label">
                                <label>Preferred Name</label>
                            </div>
<<<<<<< HEAD
                            <div class="input">
                                <input type="text" name="other_names" class="input-control" placeholder="Preferred name "  maxlength="20">
=======
                            <div class="">
                                <input type="text" name="other_names" class="form-control"  maxlength="20">
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                            </div>
                        </div>
                    </div>
                </div>
            <div class="ff-cell">
                <div class="column-1 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Date of Birth </label>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <input type="text" name="date_birth" class="input-control" placeholder="01/01/1990 " required>
=======
                            <input type="text" id="inputDOB" name="date_birth" class="form-control" placeholder="DD/MM/YYYY" required />
                            <div class="invalid-feedback">Please provide your date of birth</div>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Occupation</label>
                        </div>
                        <div class="input">
<<<<<<< HEAD
                            <input type="text" name="occupation" class="input-control" placeholder="Doctor " required>
=======
                            <input type="text" id="inputOccupation" name="occupation" class="form-control" required />
                            <div class="invalid-feedback">Please provide your occupation</div>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                        </div>
                    </div>
                </div>
            </div>
            <div class="ff-cell">
                <div class="column-1 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Unit/House No.</label>
                        </div>
<<<<<<< HEAD
                        <div class="input">
                            <input type="text" name="address" class="input-control" placeholder="10 " required>
=======
                        <div class="">
                            <input id="inputHouseNumber" type="text" name="address" class="input-control" required />
                            <div class="invalid-feedback">Please provide your unit/house number</div>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Street Address</label>
                        </div>
<<<<<<< HEAD
                        <div class="input">
                            <input type="text" name="postal_address" class="input-control" placeholder="Monash St" required>
=======
                        <div class="">
                            <input id="inputAddress" type="text" name="postal_address" class="input-control" required />
                            <div class="invalid-feedback">Please provide your street address</div>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>State</label>
                        </div>
<<<<<<< HEAD
                    </div>
                        <div class=input">
                            <select class="form-select" aria-label="Default select example">
=======
                            <select class="form-select" id="inputState" name="state" required>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                                <option selected>Choose:</option>
                                <option value="New South Wales">New South Wales</option>
                                <option value="Queensland">Queensland</option>
                                <option value="South Australia">South Australia</option>
                                <option value="Victoria">Victoria</option>
                                <option value="Western Australia">Western Australia</option>
                                <option value="Tasmania">Tasmania</option>
                            </select>
                            <div class="invalid-feedback">Please provide your state</div>
                        </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Post Code</label>
                        </div>
<<<<<<< HEAD
                        <div class="input">
                            <input type="text" name="postal_address" class="input-control" placeholder="3000" required>
=======
                        <div class="">
                            <input type="text" name="postCode" id="inputPostCode" class="input-control" required />
                            <div class="invalid-feedback">Please provide your post code</div>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                        </div>
                    </div>
                </div>
            </div>
            <div class="ff-cell">
                <div class="column-1 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Email</label>
                        </div>
<<<<<<< HEAD
                        <div class="input">
                            <input type="text" name="email" class="input-control" placeholder="monash@gmail.com " required>
=======
                        <div class="">
                            <input type="text" id="inputEmail" name="email" class="input-control" placeholder="example@email.com" required />
                            <div class="invalid-feedback">Please provide your email</div>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Phone number</label>
                        </div>
<<<<<<< HEAD
                        <div class="input">
                            <input type="text" name="phone" class="input-control" placeholder="0411222333" required>
=======
                        <div class="">
                            <input id="inputPhoneNumber" type="text" name="phone" class="input-control" required />
                            <div class="invalid-feedback">Please provide your phone number</div>
>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
                        </div>
                    </div>
                </div>
            </div>

            <div class="ff-el-group">
                <div class="label">
                    <label>Referred by?</label>
                </div>
                <div class="btn-group">
                    <select class="form-select">
                        <option selected>Choose: (optional)</option>
                        <option value="Tom">Tom</option>
                        <option value="Mary">Mary</option>
                        <option value="Linda">Linda</option>
                        <option value="Lucy">Lucy</option>
                    </select>
                </div>
            </div>
        <div class="ff-el-group">
            <h4>1.2 Existing Will &amp; Attorneys</h4>
            <p>
                <span style="font-weight: 400;">Do you have an existing… &nbsp; </span>
            </p>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Will</label>
<!--                        <i class="fa-solid fa-circle-question"</i>-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="15px" width="15px">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                        </svg>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_will" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_will" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-2 ff-t-cell" style="display:none">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Last Reviewed…</label>
                    </div>
                    <div class="input">
                        <input type="text" name="will_text" class="input-control" placeholder="  Last Reviewed…">
                    </div>
                </div>
            </div>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Powers of Attorney</label>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_powers" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_powers" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-2 ff-t-cell" style="display:none">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Last Reviewed…</label>
                    </div>
                    <div class="input">
                        <input type="text" name="powers_text" class="input-control" placeholder="  Last Reviewed…">
                    </div>
                </div>
            </div>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Binding Death Benefit Nominations</label>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-2 ff-t-cell" style="display:none">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Last Reviewed…</label>
                    </div>
                    <div class="input">
                        <input type="text" name="binding_text" class="input-control" placeholder="  Last Reviewed…">
                    </div>
                </div>
            </div>
        </div>

        <!-- add 1.3 div  -->
        <div class="ff-el-group">
            <h4>1.3 Health Concerns</h4>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Do you have any brain-related disorders; memory loss or confusion; or take any medication that could impact on cognitive function?</label>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- add family div  -->
        <div class="ff-el-group">
            <h2>Your Family</h2>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>What is your relationship status</label>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Married</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>De-facto</span>
                            </label>
                        </div>
						<div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>Separated or Divorced</span>
                            </label>
                        </div>
						<div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>Never Married or Divorced</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- add Children div  -->
        <div class="ff-el-group">
            <h2>Do you have children</h2>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>From your current relationship?</label>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
				<div class="ff-el-group">
                    <div class="label">
                        <label>From your previous relationship?</label>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- add household div  -->
        <div class="ff-el-group">
            <h2>1.6 Household members</h2>
			<p>
                <span style="font-weight: 400;">Other than those listed above… &nbsp; </span>
            </p>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Does anyone else live with you?</label>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- add Other dependents div  -->
        <div class="ff-el-group">
            <h2>1.7 Other dependents</h2>
			<p>
                <span style="font-weight: 400;">Other than those listed above… &nbsp; </span>
            </p>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Is there anyone else financially dependent on you?</label>
                    </div>
                    <div class="input" style="font-size: 0;">
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                <span>Yes</span>
                            </label>
                        </div>
                        <div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- add Other dependents div  -->
        <div class="ff-el-group">
            <h2>2. Assets & Liabilities</h2>
        </div>
        <div data-type="repeater_field" data-name="repeater_field_3" class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_3">
            <div class="ff-el-input--label asterisk-right"><label for="">Real estate</label></div>
			<div class="ff-el-input--content">
                <table data-max_repeat="" data-root_name="repeater_field_3" class="ff_repeater_table ff_flexible_table">
                    <thead>
                    <tr>
                        <th><div class="label"><label for="">Address of the property: </label></div></th>
                        <th><div class="label"><label for="">Registered owner(s):</label></div></th>
                        <th><div class="label"><label for="">Type of ownership:</label></div></th>
                        <th><div class="label"><label for="">Location of title:</label></div></th>
                        <th><div class="label"><label for="">Mortgage:</label></div></th>
                        <th><div class="label"><label for="">Property value:</label></div></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-label="Address of the property: ">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_3[0][]" id="ff_1_repeater_field_3_0" data-repeater_index="0" data-type="repeater_item" data-name="repeater_field_3_0_0" data-error_index="repeater_field_3[0]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Registered owner(s):">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_3[0][]" id="ff_1_repeater_field_3_1" data-repeater_index="1" data-type="repeater_item" data-name="repeater_field_3_1_0" data-error_index="repeater_field_3[1]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Type of ownership:">
                            <div class="ff-el-group"><div class="ff-el-input--content"><select type="select" placeholder="Select" name="repeater_field_3[0][]" id="ff_1_repeater_field_3_2" data-repeater_index="2" data-type="repeater_item" data-name="repeater_field_3_2_0" data-error_index="repeater_field_3[2]" data-calc_value="0" class="ff-el-form-control"><option value="">Select</option><option value="Sole">Sole</option><option value="Joint">Joint</option><option value="Tenants in Common">Tenants in Common</option><option value="Unsure">Unsure</option></select></div></div>
						</td>
                        <td data-label="Location of title:">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_3[0][]" id="ff_1_repeater_field_3_3" data-repeater_index="3" data-type="repeater_item" data-name="repeater_field_3_3_0" data-error_index="repeater_field_3[3]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Mortgage:">
                            <div class="ff-el-group"><div class="ff-el-input--content"><select type="select" placeholder="Select" name="repeater_field_3[0][]" id="ff_1_repeater_field_3_4" data-repeater_index="4" data-type="repeater_item" data-name="repeater_field_3_4_0" data-error_index="repeater_field_3[4]" data-calc_value="0" class="ff-el-form-control"><option value="">Select</option><option value="Yes">Yes</option><option value="No">No</option></select></div></div>
						</td>
                        <td data-label="Property value:">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" placeholder="Property value:" name="repeater_field_3[0][]" id="ff_1_repeater_field_3_5" data-repeater_index="5" data-type="repeater_item" data-name="repeater_field_3_5_0" data-error_index="repeater_field_3[5]" class="ff-el-form-control"></div></div>
						</td>
                        <td class="repeat_btn"><div class="ff-el-repeat-buttons-list js-repeat-buttons"><span class="repeat-plus ff-icon icon-plus-circle"></span><span class="repeat-minus ff-icon icon-minus-circle"></span></div>
						</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div data-type="repeater_field" data-name="repeater_field_5" class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_5">
            <div class="ff-el-input--label asterisk-right"><label for="">Bank Accounts</label></div>            <div class="ff-el-input--content">
                <table data-max_repeat="" data-root_name="repeater_field_5" class="ff_repeater_table ff_flexible_table">
                    <thead>
                    <tr>
                        <th><div class="label"><label for=""> Bank or Financial Institution: </label></div></th>
                        <th><div class="label"><label for="">Account holder(s):</label></div></th>
                        <th><div class="label"><label for="">Account type:</label></div></th>
                        <th><div class="label"><label for="">Approximate value:</label></div></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-label=" Bank or Financial Institution: ">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_5[0][]" id="ff_1_repeater_field_5_0" data-repeater_index="0" data-type="repeater_item" data-name="repeater_field_5_0_0" data-error_index="repeater_field_5[0]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Account holder(s):">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_5[0][]" id="ff_1_repeater_field_5_1" data-repeater_index="1" data-type="repeater_item" data-name="repeater_field_5_1_0" data-error_index="repeater_field_5[1]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Account type:">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_5[0][]" id="ff_1_repeater_field_5_2" data-repeater_index="2" data-type="repeater_item" data-name="repeater_field_5_2_0" data-error_index="repeater_field_5[2]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Approximate value:">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_5[0][]" id="ff_1_repeater_field_5_3" data-repeater_index="3" data-type="repeater_item" data-name="repeater_field_5_3_0" data-error_index="repeater_field_5[3]" class="ff-el-form-control"></div></div>
						</td>
                        <td class="repeat_btn">
						    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span class="repeat-plus ff-icon icon-plus-circle"></span><span class="repeat-minus ff-icon icon-minus-circle"></span></div>
						</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div data-type="repeater_field" data-name="repeater_field_6" class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_6">
            <div class="ff-el-input--label asterisk-right"><label for="">Motor vehicles</label></div>            <div class="ff-el-input--content">
                <table data-max_repeat="" data-root_name="repeater_field_6" class="ff_repeater_table ff_flexible_table">
                    <thead>
                    <tr>
                        <th><div class="label"><label for="">Make</label></div></th>
                        <th><div class="label"><label for="">Model</label></div></th>
                        <th><div class="label"><label for="">Year</label></div></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-label="Make">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_6[0][]" id="ff_1_repeater_field_6_0" data-repeater_index="0" data-type="repeater_item" data-name="repeater_field_6_0_0" data-error_index="repeater_field_6[0]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Model">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_6[0][]" id="ff_1_repeater_field_6_1" data-repeater_index="1" data-type="repeater_item" data-name="repeater_field_6_1_0" data-error_index="repeater_field_6[1]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Year">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_6[0][]" id="ff_1_repeater_field_6_2" data-repeater_index="2" data-type="repeater_item" data-name="repeater_field_6_2_0" data-error_index="repeater_field_6[2]" class="ff-el-form-control"></div></div>
						</td>
                        <td class="repeat_btn">
						    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span class="repeat-plus ff-icon icon-plus-circle"></span><span class="repeat-minus ff-icon icon-minus-circle"></span></div>
						</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div data-type="repeater_field" data-name="repeater_field_7" class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_7">
            <div class="ff-el-input--label asterisk-right"><label for="">Investments </label></div>            <div class="ff-el-input--content">
                <table data-max_repeat="" data-root_name="repeater_field_7" class="ff_repeater_table ff_flexible_table">
                    <thead>
                    <tr>
                        <th><div class="label"><label for="">Type of investment: </label></div></th>
                        <th><div class="label"><label for="">Held with:</label></div></th>
                        <th><div class="label"><label for="">Approximate value:</label></div></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-label="Type of investment: ">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_7[0][]" id="ff_1_repeater_field_7_0" data-repeater_index="0" data-type="repeater_item" data-name="repeater_field_7_0_0" data-error_index="repeater_field_7[0]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Held with:">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_7[0][]" id="ff_1_repeater_field_7_1" data-repeater_index="1" data-type="repeater_item" data-name="repeater_field_7_1_0" data-error_index="repeater_field_7[1]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Approximate value:">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_7[0][]" id="ff_1_repeater_field_7_2" data-repeater_index="2" data-type="repeater_item" data-name="repeater_field_7_2_0" data-error_index="repeater_field_7[2]" class="ff-el-form-control"></div></div>
						</td>
                        <td class="repeat_btn">
						    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span class="repeat-plus ff-icon icon-plus-circle"></span><span class="repeat-minus ff-icon icon-minus-circle"></span></div>
						</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

	    <!-- add Loans and debts div  -->
        <div class="ff-el-group">
            <h4>Loans and debts</h4>
        </div>
		<div class="ff-el-group"><div class="ff-el-input--label asterisk-right label"><label for="ff_1_description_1">Details of money you owe:</label> </div><div class="ff-el-input--content"><textarea name="description_1" id="ff_1_description_1" class="ff-el-form-control" rows="3" cols="2" data-name="description_1"></textarea></div></div>
		<div class="ff-el-group ff-el-form-left  ff_list_buttons"><div class="ff-el-input--label asterisk-right label"><label>Is there a loan agreement?</label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_11_c082e43255c5b0d25a9ca2affbf228d7"><input type="radio" name="input_radio_11" data-name="input_radio_11" class="ff-el-form-check-input ff-el-form-check-radio" value="yes" id="input_radio_11_c082e43255c5b0d25a9ca2affbf228d7"> <span>Yes</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_11_5525751c4b5b5dc676eb2c35803dec90"><input type="radio" name="input_radio_11" data-name="input_radio_11" class="ff-el-form-check-input ff-el-form-check-radio" value="no" id="input_radio_11_5525751c4b5b5dc676eb2c35803dec90"> <span>No</span></label></div></div></div>
		<div class="ff-el-group"><div class="ff-el-input--label asterisk-right label"><label for="ff_1_description_2">Details of money owed to you:</label> </div><div class="ff-el-input--content"><textarea name="description_2" id="ff_1_description_2" class="ff-el-form-control" rows="3" cols="2" data-name="description_2"></textarea></div></div>
		<div class="ff-el-group ff-el-form-left  ff_list_buttons"><div class="ff-el-input--label asterisk-right  label"><label>Is there a loan agreement?</label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_12_3f734e96b7d0a8c8988a86372d918073"><input type="radio" name="input_radio_12" data-name="input_radio_12" class="ff-el-form-check-input ff-el-form-check-radio" value="yes" id="input_radio_12_3f734e96b7d0a8c8988a86372d918073"> <span>Yes</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_12_4836f19b5cfa63f47adaf07a20cb7940"><input type="radio" name="input_radio_12" data-name="input_radio_12" class="ff-el-form-check-input ff-el-form-check-radio" value="no" id="input_radio_12_4836f19b5cfa63f47adaf07a20cb7940"> <span>No</span></label></div></div></div>
		<div class="ff-el-group ff-el-form-left  ff_list_buttons"><div class="ff-el-input--label asterisk-right label"><label>Repayment to estate?</label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_13_a6362cf826d65c90d875af5ac7b28b34"><input type="radio" name="input_radio_13" data-name="input_radio_13" class="ff-el-form-check-input ff-el-form-check-radio" value="To be repaid" id="input_radio_13_a6362cf826d65c90d875af5ac7b28b34"> <span>To be repaid</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_13_27e7d76c9835a53eb3787ac6e2917b51"><input type="radio" name="input_radio_13" data-name="input_radio_13" class="ff-el-form-check-input ff-el-form-check-radio" value="To be forgiven" id="input_radio_13_27e7d76c9835a53eb3787ac6e2917b51"> <span>To be forgiven</span></label></div></div></div>

	    <!-- add Insurance div  -->
        <div class="ff-el-group">
            <h4>Insurance</h4>
        </div>
		<div data-name="ff_cn_id_12" class="ff-t-container ff-column-container ff_columns_total_2  "><div class="ff-t-cell ff-t-column-1"><div class="ff-el-group  ff_list_buttons"><div class="ff-el-input--label asterisk-right label"><label>House and Contents:</label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_14_a60d602f31d5494100fe8f14302398a4"><input type="radio" name="input_radio_14" data-name="input_radio_14" class="ff-el-form-check-input ff-el-form-check-radio" value="yes" id="input_radio_14_a60d602f31d5494100fe8f14302398a4"> <span>Yes</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_14_bbeabdc084584ec1b0a1be4c1885dc67"><input type="radio" name="input_radio_14" data-name="input_radio_14" class="ff-el-form-check-input ff-el-form-check-radio" value="no" id="input_radio_14_bbeabdc084584ec1b0a1be4c1885dc67"> <span>No</span></label></div></div></div></div><div class="ff-t-cell ff-t-column-2"><div class="ff-el-group has-conditions ff_excluded" style=""><div class="ff-el-input--label asterisk-right label"><label for="ff_1_input_text_17">Company</label> </div><div class="ff-el-input--content"><input type="text" name="input_text_17" class="ff-el-form-control" data-name="input_text_17" id="ff_1_input_text_17"></div></div></div></div>
		<div data-name="ff_cn_id_13" class="ff-t-container ff-column-container ff_columns_total_2  "><div class="ff-t-cell ff-t-column-1"><div class="ff-el-group  ff_list_buttons"><div class="ff-el-input--label asterisk-right label"><label>Vehicle insurance</label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_15_50118c60793610c400d483077813e8ac"><input type="radio" name="input_radio_15" data-name="input_radio_15" class="ff-el-form-check-input ff-el-form-check-radio" value="yes" id="input_radio_15_50118c60793610c400d483077813e8ac"> <span>Yes</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_15_659c65b84476f8da0de01141dbab2287"><input type="radio" name="input_radio_15" data-name="input_radio_15" class="ff-el-form-check-input ff-el-form-check-radio" value="no" id="input_radio_15_659c65b84476f8da0de01141dbab2287"> <span>No</span></label></div></div></div></div><div class="ff-t-cell ff-t-column-2"><div class="ff-el-group has-conditions ff_excluded" style=""><div class="ff-el-input--label asterisk-right"><label for="ff_1_input_text_18">Company</label> </div><div class="ff-el-input--content"><input type="text" name="input_text_18" class="ff-el-form-control" data-name="input_text_18" id="ff_1_input_text_18"></div></div></div></div>
		<div data-name="ff_cn_id_15" class="ff-t-container ff-column-container ff_columns_total_2  "><div class="ff-t-cell ff-t-column-1"><div class="ff-el-group  ff_list_buttons"><div class="ff-el-input--label asterisk-right label"><label>Life insurance</label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_17_228215417ba55e26dc7c20a17f56531a"><input type="radio" name="input_radio_17" data-name="input_radio_17" class="ff-el-form-check-input ff-el-form-check-radio" value="yes" id="input_radio_17_228215417ba55e26dc7c20a17f56531a"> <span>Yes</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_17_fc4fb385c654d7b85ce00419c52ae637"><input type="radio" name="input_radio_17" data-name="input_radio_17" class="ff-el-form-check-input ff-el-form-check-radio" value="no" id="input_radio_17_fc4fb385c654d7b85ce00419c52ae637"> <span>No</span></label></div></div></div></div><div class="ff-t-cell ff-t-column-2"><div class="ff-el-group has-conditions ff_excluded" style=""><div class="ff-el-input--label asterisk-right"><label for="ff_1_input_text_20">Company</label> </div><div class="ff-el-input--content"><input type="text" name="input_text_20" class="ff-el-form-control" data-name="input_text_20" id="ff_1_input_text_20"></div></div></div></div>
		<div data-type="repeater_field" data-name="repeater_field_8" class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_8">
            <div class="ff-el-input--label asterisk-right label"><label for="">Superannuation</label></div>            <div class="ff-el-input--content">
                <table data-max_repeat="" data-root_name="repeater_field_8" class="ff_repeater_table ff_flexible_table">
                    <thead>
                    <tr>
                        <th><div class="label"><label for="">Fund</label></div></th>
                        <th><div class="label"><label for="">Value</label></div></th>
                        <th><div class="label"><label for="">Current Nomination</label></div></th>
                        <th><div class="label"><label for="">Binding</label></div></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-label="Fund">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_8[0][]" id="ff_1_repeater_field_8_0" data-repeater_index="0" data-type="repeater_item" data-name="repeater_field_8_0_0" data-error_index="repeater_field_8[0]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Value">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_8[0][]" id="ff_1_repeater_field_8_1" data-repeater_index="1" data-type="repeater_item" data-name="repeater_field_8_1_0" data-error_index="repeater_field_8[1]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Current Nomination">
                            <div class="ff-el-group"><div class="ff-el-input--content"><input type="text" name="repeater_field_8[0][]" id="ff_1_repeater_field_8_2" data-repeater_index="2" data-type="repeater_item" data-name="repeater_field_8_2_0" data-error_index="repeater_field_8[2]" class="ff-el-form-control"></div></div>
						</td>
                        <td data-label="Binding">
                            <div class="ff-el-group"><div class="ff-el-input--content"><select type="select" placeholder="Select" name="repeater_field_8[0][]" id="ff_1_repeater_field_8_3" data-repeater_index="3" data-type="repeater_item" data-name="repeater_field_8_3_0" data-error_index="repeater_field_8[3]" data-calc_value="0" class="ff-el-form-control"><option value="">Select</option><option value="Yes">Yes</option><option value="No">No</option><option value="Unsure">Unsure</option></select></div></div>
						</td>
                        <td class="repeat_btn">
						    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span class="repeat-plus ff-icon icon-plus-circle"></span><span class="repeat-minus ff-icon icon-minus-circle"></span></div>
						</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

	    <!-- add Businesses div  -->
        <div class="ff-el-group">
            <h4>Businesses</h4>
        </div>
        <div class="ff-el-group  ff_list_buttons"><div class="ff-el-input--label asterisk-right label"><label>Are you an office holder of any private companies? </label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_18_32c918cd96c6a796ff1bdcb3de606878"><input type="radio" name="input_radio_18" data-name="input_radio_18" class="ff-el-form-check-input ff-el-form-check-radio" value="yes" id="input_radio_18_32c918cd96c6a796ff1bdcb3de606878"> <span>Yes</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_18_d8159324612e5947174ec2f10383362e"><input type="radio" name="input_radio_18" data-name="input_radio_18" class="ff-el-form-check-input ff-el-form-check-radio" value="no" id="input_radio_18_d8159324612e5947174ec2f10383362e"> <span>No</span></label></div></div></div>
        <div class="ff-el-group  ff_list_buttons"><div class="ff-el-input--label asterisk-right label"><label>Are you the beneficiary/ trustee of any trusts?</label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_19_907fa15e3fed7acb76547720c4240f80"><input type="radio" name="input_radio_19" data-name="input_radio_19" class="ff-el-form-check-input ff-el-form-check-radio" value="yes" id="input_radio_19_907fa15e3fed7acb76547720c4240f80"> <span>Yes</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_19_518a85482b65997d0df80b00629eb4bc"><input type="radio" name="input_radio_19" data-name="input_radio_19" class="ff-el-form-check-input ff-el-form-check-radio" value="no" id="input_radio_19_518a85482b65997d0df80b00629eb4bc"> <span>No</span></label></div></div></div>
        <div class="ff-el-group  ff_list_buttons"><div class="ff-el-input--label asterisk-right label"><label>Are you in a partnership?</label> </div><div class="ff-el-input--content"><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_20_84ec688ac17e1b71128f23d55ab44ad9"><input type="radio" name="input_radio_20" data-name="input_radio_20" class="ff-el-form-check-input ff-el-form-check-radio" value="yes" id="input_radio_20_84ec688ac17e1b71128f23d55ab44ad9"> <span>Yes</span></label></div><div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label" for="input_radio_20_f29fd0dd59ce928d24db64ef4e3eef11"><input type="radio" name="input_radio_20" data-name="input_radio_20" class="ff-el-form-check-input ff-el-form-check-radio" value="no" id="input_radio_20_f29fd0dd59ce928d24db64ef4e3eef11"> <span>No</span></label></div></div></div>

        <div class="last">
            <div class="g-recaptcha"
                 data-sitekey="<?= RECAPTCHAV2_SITEKEY ?>">
            </div>
            <?php echo $this->Html->script('https://www.google.com/recaptcha/api.js"'); ?>
            <button type="submit" name="submit" class="ff-float-right ff-btn ff-btn-next ff-btn-secondary">Submit</button>
        </div>
    <?= $this->Form->end() ?>
</div>


<script type="text/javascript">
    $(document).on("blur", ".ff-el-group input", function() {
        var value = $.trim($(this).val());
        var is_required = $(this).parent().prev().hasClass("required");
        var is_error = $(this).parent().parent().hasClass("ff-el-is-error");
        if (is_error && value != null && value != '') {
            $(this).parent().parent().removeClass("ff-el-is-error");
            $(this).parent().find(".text-danger").remove();
        }
    });

    $(document).on("click",".ff-el-form-check-label",function(){
        $(this).parents(".input").find(".ff-el-form-check").removeClass("ff_item_selected");
        $(this).parent().addClass("ff_item_selected");
        var is_value = $(this).find("input").val();
        if(is_value == 1){
            $(this).parents(".ff-cell").find(".column-2").show();
        }else{
            $(this).parents(".ff-cell").find(".column-2").hide();
        }
        $(this).parents(".input").find(".ff-el-form-check input").prop("checked",false);
        $(this).find("input").prop("checked",true);
    });

    function submit() {
        var is_check = true;
        $(".ff-el-group>.input").each(function() {
            var is_required = $(this).prev().hasClass("required");

            if (($(this).find("input[type='text']").val() == null || $(this).find("input[type='text']").val() == "") && is_required) {
                var is_error = $(this).parent().hasClass("ff-el-is-error");
                if (!is_error) {
                    $(this).parent().addClass("ff-el-is-error");
                    $(this).append('<div class="error text-danger">This field is required</div>');
                }
                is_check = false;
            }
        });
        if (is_check) {
            var formData = {};
            $(".ff-el-group input").each(function() {
                var keys = $(this).attr("name");
                var type = $(this).attr("type");
                if(type == "radio"){
                    var value = $("input[name='"+keys+"']:checked").val();
                }else{
                    var value = $(this).val();
                }
                value = typeof(value) == "undefined" ? 0 : value;
                formData[keys] = value;
            });

            $.ajax({
                url:"/register",
                data:formData,
                type:"POST",
                beforeSend: function(xhr){
                    xhr.setRequestHeader('X-CSRF-Token', <?=json_encode($this->request->getCookie('csrfToken'));?>);
                },
                success:function(res){
                    alert(res);
                }
            });
        }
    }
<<<<<<< HEAD
=======


    $("#submitIntakeform").click(function(){
        let givenName=inputGivenName.value
        let lastName=inputLastName.value
        let DOB = inputDOB.value
        let occupation = inputOccupation.value
        let houseNumber = inputHouseNumber.value
        let address = inputAddress.value
        let state = inputState.value
        let postCode = inputPostCode.value
        let email = inputEmail.value
        let phoneNumber = inputPhoneNumber.value
        if(givenName=="") $("#inputGivenName").addClass("is-invalid")
        if(lastName=="") $("#inputLastName").addClass("is-invalid")
        if(DOB=="") $("#inputDOB").addClass("is-invalid")
        if(occupation=="") $("#inputOccupation").addClass("is-invalid")
        if(houseNumber=="") $("#inputHouseNumber").addClass("is-invalid")
        if(address=="") $("#inputAddress").addClass("is-invalid")
        if(state=="") $("#inputState").addClass("is-invalid")
        if(postCode=="") $("#inputPostCode").addClass("is-invalid")
        if(email=="") $("#inputEmail").addClass("is-invalid")
        if(phoneNumber=="") $("#inputPhoneNumber").addClass("is-invalid")

    })



>>>>>>> 0de11ad51558726ae794f95994a847c40b55d3e3
</script>
</div>
