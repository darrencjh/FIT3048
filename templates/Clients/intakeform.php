<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
$this->assign('title', 'Intake Form');
$this->Html->css('intakeform', ['block' => true]);
$this->Html->script(['bootstrap-autocomplete.min', 'underscore-min', 'intakeform'], ['block' => true]);


$householder_key = isset($householder_key) ? $householder_key : '<%= householder_key %>';
$dependent_key = isset($dependent_key) ? $dependent_key : '<%= dependent_key %>';
$children_key = isset($children_key) ? $children_key : '<%= child_key %>';
$grandchildren_key = isset($grandchildren_key) ? $grandchildren_key : '<%= grandchild_key %>';
$estates_key = isset($estates_key) ? $estates_key : '<%= estate_key %>';
$banks_key = isset($banks_key) ? $banks_key : '<%= bank_key %>';
$vehicles_key = isset($vehicles_key) ? $vehicles_key : '<%= vehicle_key %>';
$investments_key = isset($investments_key) ? $investments_key : '<%= investment_key %>';
$superannuations_key = isset($superannuations_key) ? $superannuations_key : '<%= superannuation_key %>';
$executors_key = isset($executors_key) ? $executors_key : '<%= executor_key %>';
$altexecutors_key = isset($altexecutors_key) ? $altexecutors_key : '<%= altexecutor_key %>';
$bequests_key = isset($bequests_key) ? $bequests_key : '<%= bequest_key %>';

$beneficiaries_key = isset($beneficiaries_key) ? $beneficiaries_key : '<%= beneficiary_key %>';
$attorneys_key= isset($attorneys_key) ? $attorneys_key : '<%= attorney_key %>';
$altattorneys_key= isset($altattorneys_key) ? $altattorneys_key : '<%= altattorney_key %>';
$decisionMakers_key=isset($decisionMakers_key) ? $decisionMakers_key : '<%= decisionMaker_key %>';

?>
<script>
    $(() => {
        //disable the Enter
        $(window).keydown(function (event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                return false;
            }
        });


        $('#inputSuburb').keyup(function () {
            $(".bootstrap-autocomplete").addClass("show")
        })


        $('#inputSuburb').autoComplete({
            resolverSettings: {
                url: '<?php echo $this->Url->build(['controller' => 'suburbs', 'action' => 'getPostcodeAndState'])?>',
                queryKey: 'input'
            },
            minLength: 2,
        }).on('autocomplete.select', function (e) {
            let responseData = e.target.value
            console.log(responseData)

            let temp = responseData.toString().split(' ')
            let postcode = temp.pop()
            let state = temp.pop()
            let suburb = temp.join(' ')
            document.getElementById('inputSuburb').value = suburb
            document.getElementById('inputPostCode').value = postcode
            // $('#inputState').selectpicker('val',state)
            document.getElementById('inputState').value = state

            $('.bootstrap-autocomplete').mouseleave(function () {
                $(".bootstrap-autocomplete").removeClass("show")
            })
        });
    })
</script>


<main class="main">
    <div class="container">
        <div id="content">

            <div class="form-title">
                Wills & Estates Intake Form
            </div>


            <?= $this->Form->create($client, ["method" => "post"]) ?>
            <!-- Page 1           -->
            <div id="page1" class="collapse show">

                <div class="text-muted mt-3">Step 1 of 4 - Step 1</div>
                <div class="progress my-2">
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 5%;"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
                    </div>
                </div>

                <div class="ff-el-group mt-4">
                    <h2>1. Basic Information</h2>
                    <h4>1.1 Your Details</h4>
                </div>

                <!-- name row -->
                <div class="row g-0 mb-3" id="customerName">
                    <div class="col-12 col-md-4 pe-md-3">
                        <div class="label required">
                            <label>Given Name</label>
                        </div>
                        <input type="text" name="givenName" id="inputGivenName" class="form-control"
                               maxlength="20"
                               required/>
                        <div class="invalid-feedback" id="nameError">Please provide your given name</div>
                    </div>
                    <div class="col-12 col-md-4 px-md-3">
                        <div class="label required">
                            <label>Last Name</label>
                        </div>
                        <input id="inputLastName" type="text" name="lastName" class="form-control"
                               maxlength="20"
                               required/>
                        <div class="invalid-feedback" id="lastNameError">Please provide your last name</div>
                    </div>
                    <div class="col-12 col-md-4 ps-md-3">
                        <div class="label">
                            <label>Previous Name</label>
                        </div>
                        <input id="inputPrevName" type="text" name="previous_name" class="form-control" maxlength="20">
                        <div class="invalid-feedback" id="prevNameError"></div>
                    </div>
                </div>
                <!--  Date of birth + job  -->
                <div class="row g-0">
                    <div class="mb-3 col-12 col-md-6 pe-md-3">
                        <div class="label required">
                            <label>Date of Birth</label>
                        </div>
                        <input type="text" id="inputDOB" name="date_of_birth" class="form-control"
                               placeholder="mm/dd/yyyy" onfocus="(this.type='date')" onblur="(this.type='text')"
                               required/>
                        <!--                         pattern="\d{1,2}[/]\d{1,2}[/]\d{4}"-->
                        <div class="invalid-feedback" id="dateError">Please provide your date of birth</div>
                    </div>
                    <div class="mb-3 col-12 col-md-6 ps-md-3">
                        <div class="label required">
                            <label>Occupation</label>
                        </div>
                        <input type="text" id="inputOccupation" name="occupation" class="form-control" required/>
                        <div class="invalid-feedback" id="occupationError">Please provide your occupation</div>
                    </div>
                </div>
                <!-- Unit + street number +suburb/Town -->
                <div class="row g-0 mb-3">
                    <!--            Unit         -->
                    <div class="col-12 col-md-4 pe-md-3">
                        <div class="label required">
                            <label>Unit/House No.</label>
                        </div>
                        <input id="inputUnit" type="text" name="unit" class="form-control" required/>
                        <div class="invalid-feedback" id="unitError">Please provide your unit/house number</div>
                    </div>
                    <!--               street number      -->
                    <div class="col-12 col-md-4 px-md-3">
                        <div class="label required">
                            <label>Street Address</label>
                        </div>
                        <input id="inputStreet" type="text" name="street" class="form-control"
                               required/>
                        <div class="invalid-feedback" id="addressError">Please provide your street address</div>
                    </div>

                    <!--               Suburb/Town     -->
                    <div class="col-12 col-md-4 ps-md-3">
                        <div class="label required">
                            <label>Suburb/Town</label>
                        </div>
                        <input id="inputSuburb" type="text" name="suburb" class="form-control" auto-complete='off'
                               required/>
                        <div class="invalid-feedback" id="suburbError">Please provide your Suburb/Town</div>
                    </div>
                </div>
                <!--      State+ PostCode+ Postal address        -->
                <div class="row g-0 mb-3">
                    <!--State -->
                    <div class="col-12 col-md-4 pe-md-3">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>State</label>
                            </div>
                            <select class="form-select text-grey" id="inputState" name="state" required>
                                <option selected value="">Choose...</option>
                                <option value="ACT">Australian Capital Territory</option>
                                <option value="NSW">New South Wales</option>
                                <option value="NT">Northern Territory</option>
                                <option value="QLD">Queensland</option>
                                <option value="SA">South Australia</option>
                                <option value="TAS">Tasmania</option>
                                <option value="VIC">Victoria</option>
                                <option value="WA">Western Australia</option>
                            </select>

                            <div class="invalid-feedback">Please provide your state</div>
                        </div>
                    </div>
                    <!-- PostCode -->
                    <div class="col-12 col-md-4 px-md-3">
                        <div class="label required">
                            <label>Postcode</label>
                        </div>
                        <input type="zip" name="postCode" id="inputPostCode" class="form-control" maxlength="4"
                               onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                               required/>
                        <div class="invalid-feedback" id="postcodeError">Please provide your post code</div>
                    </div>
                    <!--  Postal address   -->
                    <div class="col-12 col-md-4 ps-md-3">
                        <div class="label">
                            <label>Postal address</label>
                        </div>
                        <input type="text" name="postal_address" id="inputPostAddress" class="form-control"/>
                        <div class="invalid-feedback" id="postalAddressError">Please provide a valid address</div>
                    </div>
                </div>

                <!-- Email + phone -->
                <div class="row g-0">
                    <div class="mb-3 col-12 col-md-6 pe-md-3">
                        <div class="label required">
                            <label>Email</label>
                        </div>
                        <input type="email" id="inputEmail" name="email" class="form-control"
                               placeholder="example@email.com"
                               maxlength="64" required/>
                        <div class="invalid-feedback" id="emailError">Please provide your email</div>
                    </div>
                    <div class="mb-3 col-12 col-md-6 ps-md-3">
                        <div class="label required">
                            <label>Phone number</label>
                        </div>
                        <input type="text" id="inputPhone" name="phone" class="form-control"
                               placeholder="eg. 04xxxxxxxx" maxlength="10"
                               onkeypress='return event.charCode >= 48 && event.charCode <= 57' required/>
                        <div class="invalid-feedback" id="phoneError">Please provide your phone number</div>
                    </div>
                </div>


                <!--  Next page button    -->
                <div class="text-end">
                    <a class="btn btn-shelbourne mt-3 rounded-pill px-4 py-2" id="page1Next">Next</a>
                </div>
            </div>
            <!--            <a href="#" class="btn btn-danger" id="jumpTo4">jump to page4</a>-->

            <!-- Page 2           -->
            <div id="page2" class="collapse text-grey">
                <!--    Progress bar         -->
                <div class="mt-3">Step 2 of 4 - Step 2</div>
                <div class="progress my-2">
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 25%;"
                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                    </div>
                </div>

                <!--   1.2 Existing documents -->
                <div class="ff-el-group my-4">
                    <h4>1.2 Existing Documents</h4>
                    <p>
                        <span class="text-muted">Do you have any existing… &nbsp; </span>
                    </p>
                </div>

                <!--                Identification  -->
                <div class="row g-0 mb-4">
                    <div class="col-12">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Proof of Identification (always required)</label>
                            </div>
                            <ul>
                                <li>Proof of your identities, such as a passport, or a driver's licence, or a bank card
                                    with your full name
                                </li>
                                <li class="mt-2">Proof of your address, such as a utility bill with your house as the
                                    supply address, or a bank or super statement addressed to your name at your address
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div id="documentsGroup">
                    <!--                1-Will -->
                    <div class="mb-4">
                        <div class="">
                            <div class="ff-el-group">
                                <div class="label">
                                    <label>Will</label>
                                    <a class="d-inline-block" data-bs-toggle="tooltip"
                                       data-bs-original-title="A will is a legal document that spells out your wishes regarding the care of your children, as well as the distribution of your assets after your death."
                                       data-bs-placement="right">
                                        <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                             height="15px" width="15px">
                                            <path
                                                d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                                        </svg>
                                    </a>
                                </div>
                                <!--   Yes/No selection    -->
                                <?=
                                $this->element('yesnoRadio', [
                                    'inputName' => 'has_will',
                                ]);
                                ?>

                            </div>
                        </div>
                    </div>

                    <!--                2-Powers of Attorney -->
                    <div class="mb-4">
                        <div>
                            <div class="ff-el-group">
                                <div class="label">
                                    <label>Powers of Attorney</label>
                                    <a class="d-inline-block" data-bs-toggle="tooltip"
                                       data-bs-original-title="Refers to a legal authorization that gives a designated person the power to act for someone else. As such, a POA gives the agent or attorney the authority to act on behalf of the principal."
                                       data-bs-placement="right">
                                        <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                             height="15px" width="15px">
                                            <path
                                                d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                                        </svg>
                                    </a>
                                </div>
                                <!--   Yes/No selection    -->
                                <?=
                                $this->element('yesnoRadio', [
                                    'inputName' => 'has_power',
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>

                    <!--                3-Binding Death Benefit Nominations-->
                    <div class="mb-4">
                        <div>
                            <div class="ff-el-group">
                                <div class="label">
                                    <label>Binding Death Benefit Nominations</label>
                                    <a class="d-inline-block" data-bs-toggle="tooltip"
                                       data-bs-original-title="This is a written direction from a member to their superannuation trustee setting out how they wish some or all of their superannuation death benefits to be distributed. The nomination is generally valid for a maximum of three years and lapses if it is not renewed."
                                       data-bs-placement="right">
                                        <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                             height="15px" width="15px">
                                            <path
                                                d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                                        </svg>
                                    </a>
                                </div>
                                <!--   Yes/No selection    -->
                                <?=
                                $this->element('yesnoRadio', [
                                    'inputName' => 'has_binding',
                                ]);
                                ?>
                            </div>
                        </div>

                    </div>

                    <!--                4-has decision maker-->
                    <div class="mb-4">
                        <div>
                            <div class="ff-el-group">
                                <div class="label">
                                    <label>Existing Medical Treatment Decision Maker</label>
                                    <a class="d-inline-block" data-bs-toggle="tooltip"
                                       data-bs-original-title="A Medical Treatment Decision Maker provides for a time when you are unable to make medical decisions for yourself. "
                                       data-bs-placement="right">
                                        <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                             height="15px" width="15px">
                                            <path
                                                d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                                        </svg>
                                    </a>
                                </div>
                                <!--   Yes/No selection    -->
                                <?=
                                $this->element('yesnoRadio', [
                                    'inputName' => 'has_decision_maker',
                                ]);
                                ?>
                            </div>
                        </div>

                    </div>

                    <!--                5-has_superannu_deed-->
                    <div class="mb-4">
                        <div>
                            <div class="ff-el-group">
                                <div class="label">
                                    <label>Copy of Self Managed Superannuation Trust Deed</label>
                                    <a class="d-inline-block" data-bs-toggle="tooltip"
                                       data-bs-original-title="A Self Managed Superannuation trust deed is a legal document that sets out the rules for establishing and operating your self managed super fund. Together with the super laws they form the funds 'governing rules' and detail the powers, duties and responsibilities of the fund's trustees, they also detail the rights of the members."
                                       data-bs-placement="right">
                                        <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                             height="15px" width="15px">
                                            <path
                                                d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                                        </svg>
                                    </a>
                                </div>
                                <!--   Yes/No selection    -->
                                <?=
                                $this->element('yesnoRadio', [
                                    'inputName' => 'has_superannu_deed',
                                ]);
                                ?>
                            </div>
                        </div>

                    </div>

                    <!--                6-has_family_deed-->
                    <div class="mb-4">
                        <div class="ff-el-group">
                            <div class="label">
                                <label>Copy of Family Trust Deed</label>
                                <a class="d-inline-block" data-bs-toggle="tooltip"
                                   data-bs-original-title="A family trust Deed is an agreement where a person or a company agrees to hold assets for others' benefit, usually their family members. It is often set up by families to own assets."
                                   data-bs-placement="right">
                                    <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         height="15px" width="15px">
                                        <path
                                            d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                                    </svg>
                                </a>
                            </div>
                            <!--   Yes/No selection    -->
                            <?=
                            $this->element('yesnoRadio', [
                                'inputName' => 'has_family_deed',
                            ]);
                            ?>
                        </div>
                    </div>

                    <!-- 7,8,9 Businesses div  -->
                    <h4 class="border-0">Businesses</h4>
                    <div class="mb-4">
                        <div>
                            <div class="label">
                                <label>Are you an office holder of any private companies?</label>
                            </div>
                            <!--   Yes/No selection    -->
                            <?=
                            $this->element('yesnoRadio', [
                                'inputName' => 'is_office_holder',
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <div class="label">
                                <label>Are you the beneficiary/ trustee of any trusts?</label>
                            </div>
                            <!--   Yes/No selection    -->
                            <?=
                            $this->element('yesnoRadio', [
                                'inputName' => 'is_beneficiary',
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <div class="label">
                                <label>Are you in a partnership?</label>
                            </div>
                            <!--   Yes/No selection    -->
                            <?=
                            $this->element('yesnoRadio', [
                                'inputName' => 'in_partnership',
                            ]);
                            ?>
                        </div>
                    </div>


                </div>


                <!--                Documents Overview-->
                <div class="card  mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-shelbourne fw-bold">Documents to bring</h5>
                        <h6 class="card-subtitle mt-2">Please bring/email your existing docs before your first
                            appointment.</h6>
                        <p class="card-text text-grey">
                        <ol id="documentsToBring" class="list-group-numbered">
                            <li>Identification (always required)</li>
                            <li class="collapse">Your existing will</li>
                            <li class="collapse">Your existing power of attorney</li>
                            <li class="collapse">Your binding Death Benefit Nominations</li>
                            <li class="collapse">Your existing medical treatment decision maker appointment</li>
                            <li class="collapse">Copy of Self Managed Superannuation Trust Deed</li>
                            <li class="collapse">Copy of Family Trust Deed</li>
                            <li class="collapse">Copy of shareholders agreement and company constitution</li>
                            <li class="collapse">Copy of existing trustees</li>
                            <li class="collapse">Copy of partnership agreement</li>
                        </ol>
                        </p>
                        <div>
                            <span>Email:</span>
                            <a href="mailTo:Leonie@shelbournelegal.com.au" class="card-link text-shelbourne">Leonie@shelbournelegal.com.au</a>
                        </div>
                        <div>
                            <span>Office:</span>
                            <a href="https://shelbournelegal.com.au/contact/" target="_blank" class="text-shelbourne">See
                                the contact page</a>
                        </div>
                    </div>
                </div>


                <!--             1.3 Health    -->
                <div class="ff-el-group">
                    <h4>1.3 Health Concerns</h4>
                </div>
                <div class="row g-0 mb-4">
                    <div class="col-12 col-md-6 pe-md-2">
                        <div class="ff-el-group">
                            <div class="label">
                                <label>Do you have any brain-related disorders; memory loss or confusion; or take any
                                    medication that could impact on cognitive function?</label>
                            </div>
                            <!--   Yes/No selection    -->
                            <?=
                            $this->element('yesnoRadio', [
                                'inputName' => 'is_health',
                            ]);
                            ?>
                        </div>
                    </div>


                    <!-- description:display when click "Yes"  -->
                    <div class="col-12 col-md-6 ps-md-2 collapse" id="health_desc">
                        <div class="fw-bold label">
                            <label for="health_textarea">Please describe</label>
                        </div>
                        <div>
                            <textarea name="health_desc" id="health_textarea" class="form-control"
                                      data-name="description" style="height: 92px; "></textarea>
                        </div>
                    </div>
                </div>

                <!--             family div  -->
                <div class="ff-el-group">
                    <h2>Your Family</h2>
                </div>
                <div class="mb-4">
                    <div class="ff-el-group">
                        <!--    4 choices group      -->
                        <div class="label">
                            <label>What is your relationship status</label>
                        </div>
                        <div class="relationStatus d-flex mb-3">
                            <div class="statusArea">
                                <label class="statusLabel">
                                    <input type="radio" name="relationship_status" value="married">
                                    <span class="oneStatus" id="firstStatus">Married</span>
                                </label>
                            </div>
                            <div class="statusArea">
                                <label class="statusLabel">
                                    <input type="radio" name="relationship_status" value="de-facto">
                                    <span class="oneStatus">De-facto</span>
                                </label>
                            </div>
                            <div class="statusArea">
                                <label class="statusLabel">
                                    <input type="radio" name="relationship_status" value="separated or divorced">
                                    <span class="oneStatus">Separated or Divorced</span>
                                </label>
                            </div>
                            <div class="statusArea">
                                <label class="statusLabel">
                                    <input type="radio" name="relationship_status" value="never married or divorced">
                                    <span class="oneStatus" id="lastStatus">never married or Divorced</span>
                                </label>
                            </div>
                        </div>

                        <div id="relationFields">
                            <!--    Married fields-->
                            <div class="row g-0  collapse">
                                <div class="mb-3 col-12 col-md-6 pe-md-3">
                                    <div class="label">
                                        <label for="married_fullName">Partner’s full name</label>
                                    </div>
                                    <input type="text" name="married_fullName" class="form-control"
                                           id="married_fullName"
                                           placeholder="Partner's full name">
                                    <div class="invalid-feedback">Please check the name format</div>
                                </div>

                                <div class="mb-3 col-12 col-md-6 ps-md-3">
                                    <div class="label">
                                        <label for="married_dob">Partner’s DOB</label>
                                    </div>
                                    <input type="text" name="married_dob" class="form-control" id="married_dob"
                                           placeholder="mm/dd/yyyy" onfocus="(this.type='date')"
                                           onblur="(this.type='text')">
                                </div>

                                <div class="col-12 col-md-6 pe-md-3">
                                    <div class="label">
                                        <label for="married_phone">Partner’s Mobile Number</label>
                                    </div>
                                    <input type="text" name="married_phone" class="form-control" id="married_phone"
                                           placeholder="Mobile Number">
                                    <div class="invalid-feedback">Please check the phone format</div>
                                </div>

                            </div>
                            <!--   de-facto fields-->
                            <div class="row g-0 collapse">
                                <div class="mb-3 col-12 col-md-6 pe-md-3">
                                    <div class="label">
                                        <label for="defacto_fullName">Partner’s full name</label>
                                    </div>
                                    <input type="text" name="defacto_fullName" class="form-control"
                                           id="defacto_fullName"
                                           placeholder="Partner's full name">
                                    <div class="invalid-feedback">Please check the name format</div>
                                </div>

                                <div class="mb-3 col-12 col-md-6 ps-md-3">
                                    <div class="label">
                                        <label for="defacto_living">When did you start living together</label>
                                    </div>
                                    <input type="text" name="defacto_living" class="form-control" id="defacto_living"
                                           placeholder="When did you start living together">
                                </div>

                                <div class="col-12">
                                    <div class="label">
                                        <label>Are you contemplating marriage</label>
                                    </div>
                                    <!--   Yes/No selection    -->
                                    <?=
                                    $this->element('yesnoRadio', [
                                        'inputName' => 'defacto_mariage',
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <!--   Separated or Divorced-->
                            <div class="collapse">
                                <div class="label">
                                    <label>Has a property settlement occurred?</label>
                                </div>
                                <!--   Yes/No selection    -->
                                <?=
                                $this->element('yesnoRadio', [
                                    'inputName' => 'sepdiv_property_settlement',
                                ]);
                                ?>
                            </div>

                            <!--    never      -->
                            <div></div>
                        </div>

                    </div>
                </div>

                <!--           Children  -->
                <div class="ff-el-group">
                    <h4>Do you have children</h4>
                </div>
                <div class="mb-4 row g-0">
                    <!--     2 buttons groups    -->
                    <!--   current child-->
                    <div class="ff-el-group col-12 col-md-6">
                        <div class="label">
                            <label>From your current relationship?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_child_current',
                        ]);
                        ?>
                    </div>
                    <!--   previous child-->
                    <div class="ff-el-group col-12 col-md-6">
                        <div class="label">
                            <label>From your previous relationship?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_child_prev',
                        ]);
                        ?>
                    </div>

                    <!--  child hidden fields  -->
                    <div id="hasChildren" class="mt-3 collapse">
                        <!--     1.4 Your Children               -->
                        <div id="yourChildren">
                            <div class="label">
                                <label>1.4 Your Children (including step and adopted children)</label>
                            </div>
                            <!--   child inputs    -->
                            <div id="children-container">

                            </div>

                            <script id="children-template" type="text/x-underscore-template">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("children.{$children_key}.full_name", ['label' => 'Name', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("children.{$children_key}.age", ['label' => 'Age', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("children.{$children_key}.address", ['label' => 'Address', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("children.{$children_key}.mother", ['label' => 'Mother', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("children.{$children_key}.father", ['label' => 'Father', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0 ">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </script>


                        </div>

                        <!--     1.5 Your Grandchildren    -->
                        <div id="yourGrandChildren">
                            <div class="label">
                                <label>1.5 Your Grandchildren (including step, adopted grandchildren)</label>
                            </div>
                            <!--   child inputs    -->
                            <div id="grandChildren-container">

                            </div>

                            <script id="grandchildren-template" type="text/x-underscore-template">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("grandchildren.{$grandchildren_key}.full_name", ['label' => 'Name', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("grandchildren.{$grandchildren_key}.age", ['label' => 'Age', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("grandchildren.{$grandchildren_key}.address", ['label' => 'Address', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("grandchildren.{$grandchildren_key}.mother", ['label' => 'Mother', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 pe-md-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("grandchildren.{$grandchildren_key}.father", ['label' => 'Father', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0 ">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </script>


                        </div>

                    </div>

                </div>


                <!--          1.6 add household div  -->
                <div class="ff-el-group">
                    <h4>1.6 Household members</h4>
                    <p>
                        <span style="font-weight: 400;">Other than those listed above… &nbsp; </span>
                    </p>
                </div>
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label>Does anyone else live with you?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_household_member',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourHouseMembers" class="collapse">
                        <div class="label">
                            <label>If yes</label>
                        </div>

                        <div id="householder-container">

                        </div>


                        <script id="householder-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-5 pe-md-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("householders.{$householder_key}.full_name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5 pe-md-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("householders.{$householder_key}.relationship", ['label' => 'Relationship to you', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2">
                                    <div class="row g-0">
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                            <a class="btn add">
                                                <span class="fas fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0 ">
                                            <a class="btn delete">
                                                <span class="fas fa-minus-circle"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </script>
                    </div>
                </div>


                <!--          1.7 add Other dependents  -->
                <div class="ff-el-group">
                    <h2>1.7 Other dependents</h2>
                    <p>
                        <span style="font-weight: 400;">Other than those listed above… &nbsp; </span>
                    </p>
                </div>
                <div class="mb-5">
                    <div>
                        <div class="label">
                            <label>Is there anyone else financially dependent on you?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_financial_dependent',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourOtherDep" class="collapse">
                        <div class="label">
                            <label>If yes</label>
                        </div>

                        <div id="dependent-container">

                        </div>


                        <script id="dependent-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-3 pe-md-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("dependents.{$dependent_key}.full_name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 pe-md-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("dependents.{$dependent_key}.relationship", ['label' => 'Relationship to you', 'class' => 'form-control']); ?>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 pe-md-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("dependents.{$dependent_key}.nature", ['label' => 'Nature of dependency', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-3">
                                    <div class="row g-0">
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                            <a class="btn add">
                                                <span class="fas fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                            <a class="btn delete">
                                                <span class="fas fa-minus-circle"></span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </script>


                    </div>
                </div>


                <!--     Previous + next button           -->
                <div class="clearfix">
                    <a class="btn btn-outline-secondary mt-3 float-start" id="page2Prev">Previous</a>
                    <a class="btn btn-shelbourne mt-3 rounded-pill px-4 py-2 float-end" id="page2Next">Next</a>
                </div>
            </div>


            <!-- Page 3           -->
            <div id="page3" class="collapse">
                <div class="text-muted mt-3">Step 3 of 4 - Step 3</div>
                <div class="progress my-2">
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 50%;"
                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                    </div>
                </div>


                <!-- Section1   Helper      -->
                <div class="ff-el-group mt-4">
                    <h4>Accountant/Adviser/Referral</h4>
                </div>
                <!--     Accountant -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label>Do you have an accountant?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_accountant',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourAccountant" class="collapse">
                        <div class="label">
                            <label class="text-danger">*If yes</label>
                        </div>
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-4 pe-md-2">
                                <div class="label">
                                    <label>Full Name</label>
                                </div>
                                <input type="text" id="accountant_name" name="accountant_name" class="form-control">
                                <div class="invalid-feedback">Please check the name format</div>
                            </div>

                            <div class="col-12 col-lg-4 px-md-2">
                                <div class="label">
                                    <label>Firm</label>
                                </div>
                                <input type="text" name="accountant_firm" class="form-control">
                            </div>

                            <div class="col-12 col-lg-4 ps-md-2">
                                <div class="label">
                                    <label>Email</label>
                                </div>
                                <input type="email" name="accountant_email" class="form-control">
                                <div class="invalid-feedback">Please check the email format</div>

                            </div>

                        </div>

                        <div class="label mt-2">
                            <label>Would you like your accountant to help complete this section for you?</label>
                        </div>
                        <?= $this->element('yesnoRadio', ['inputName' => 'accountant_help']); ?>

                    </div>
                </div>

                <!--     Financial Adviser -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label>Do you have a Financial Adviser?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_adviser',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourAdvisor" class="collapse">
                        <div class="label">
                            <label class="text-danger">*If yes</label>
                        </div>
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-4 pe-md-2">
                                <div class="label">
                                    <label>Full Name</label>
                                </div>
                                <input type="text" id="adviser_name" name="adviser_name" class="form-control">
                                <div class="invalid-feedback">Please check the name format</div>
                            </div>

                            <div class="col-12 col-lg-4 px-md-2">
                                <div class="label">
                                    <label>Firm</label>
                                </div>
                                <input type="text" name="adviser_firm" class="form-control">
                            </div>

                            <div class="col-12 col-lg-4 ps-md-2">
                                <div class="label">
                                    <label>Email</label>
                                </div>
                                <input type="email" name="adviser_email" class="form-control">
                                <div class="invalid-feedback">Please check the email format</div>

                            </div>

                        </div>
                        <div class="label mt-2">
                            <label>Would you like your financial adviser to help complete this section for you?</label>
                        </div>
                        <?= $this->element('yesnoRadio', ['inputName' => 'adviser_help']); ?>

                    </div>
                </div>


                <!--     referral -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label>Who referred you to us?</label>
                        </div>

                        <select class="form-select text-grey w-25" id="inputReferral" name="referrer_source">
                            <option selected value="">Choose...</option>
                            <option value="accountant">Accountant</option>
                            <option value="financial adviser">Financial Adviser</option>
                            <option value="facebook">Facebook</option>
                            <option value="google">Google</option>
                            <option value="my website">My Website</option>
                            <option value="others">Others</option>
                        </select>

                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourReferral" class="collapse">
                        <div class="label">
                            <label class="text-danger">*If yes</label>
                        </div>
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-4 pe-md-2">
                                <div class="label">
                                    <label>Full Name</label>
                                </div>
                                <input type="text" id="referrer_name" name="referrer_name" class="form-control">
                                <div class="invalid-feedback">Please check the name format</div>
                            </div>

                            <div class="col-12 col-lg-4 px-md-2">
                                <div class="label">
                                    <label>Firm</label>
                                </div>
                                <input type="text" name="referrer_firm" class="form-control">
                            </div>

                            <div class="col-12 col-lg-4 ps-md-2">
                                <div class="label">
                                    <label>Email</label>
                                </div>
                                <input type="email" name="referrer_email" class="form-control">
                                <div class="invalid-feedback">Please check the email format</div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- 2.Assets & Liabilities  -->
                <div class="ff-el-group">
                    <h2>2. Assets & Liabilities</h2>
                </div>

                <!--       Real estate         -->
                <div class="mb-4 text-grey">
                    <div>
                        <div class="label">
                            <label class="fs-5 fw-bold">Real estate</label>
                        </div>
                        <div>
                            <label>Do you have any real estate?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_estate',
                        ]);
                        ?>
                    </div>

                    <div id="yourRealEstate" class="collapse">

                        <div id="estate-container">

                        </div>


                        <script id="estate-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-4 col-xl-2 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("estates.{$estates_key}.address", ['label' => 'Address', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 col-xl-2 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("estates.{$estates_key}.owner", ['label' => 'Owner(s)', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 col-xl-2 pe-xl-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("estates.{$estates_key}.type", [
                                            'options' => [
                                                'Sole', 'Joint', 'Tenants in Common', 'Unsure'
                                            ],
                                            'empty' => 'Select...',
                                            'class' => 'form-select text-grey',
                                            'label' => 'Type of ownership'
                                        ]); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4  col-xl-2 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("estates.{$estates_key}.location", ['label' => 'Location of title', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4  col-xl-2 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("estates.{$estates_key}.mortgage", [
                                            'options' => [
                                                'Yes', 'No'
                                            ],
                                            'empty' => 'Select...',
                                            'class' => 'form-select text-grey',
                                            'label' => 'Mortgage'
                                        ]); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 col-xl-2 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("estates.{$estates_key}.value", ['label' => 'Property Value', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>

                    </div>


                    <div class="text-danger collapse" id="estateError">If has,please give at least one estate detail
                    </div>

                </div>

                <!--      Bank Accounts          -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5  fw-bold">Bank Accounts</label>
                        </div>
                        <div>
                            <label>Do you have any bank account?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_bankaccount',
                        ]);
                        ?>
                    </div>

                    <div id="yourBankAccount" class="collapse">
                        <div id="bank-container">

                        </div>


                        <script id="bank-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-3 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("bankaccounts.{$banks_key}.bank", ['label' => 'Bank Institution', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-3 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("bankaccounts.{$banks_key}.holder", ['label' => 'Account holder(s)', 'class' => 'form-control']); ?>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-3 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("bankaccounts.{$banks_key}.type", ['label' => 'Account type', 'class' => 'form-control']); ?>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-3 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("bankaccounts.{$banks_key}.value", ['label' => 'Approximate value', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>

                    </div>


                    <div class="text-danger collapse" id="bankError">If has,please give at least one bank account
                        detail
                    </div>


                </div>

                <!--       Motor vehicles         -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5  fw-bold">Motor vehicles</label>
                        </div>
                        <div>
                            <label>Do you have any Motor vehicle?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_vehicle',
                        ]);
                        ?>
                    </div>

                    <div id="yourVehicle" class="collapse">
                        <div id="vehicle-container">

                        </div>


                        <script id="vehicle-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("vehicles.{$vehicles_key}.make", ['label' => 'Make', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("vehicles.{$vehicles_key}.model", ['label' => 'Model', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("vehicles.{$vehicles_key}.year", ['label' => 'Year', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>

                    </div>


                    <div class="text-danger collapse" id="vehicleError">If has,please give at least one vehicle detail
                    </div>
                </div>

                <!--        Investments        -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5  fw-bold">Investments</label>
                        </div>
                        <div>
                            <label>Do you have any Investment?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_investment',
                        ]);
                        ?>
                    </div>
                    <div id="yourInvestment" class="collapse">
                        <div id="investment-container">

                        </div>


                        <script id="investment-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("investments.{$investments_key}.type", ['label' => 'Type', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("investments.{$investments_key}.held", ['label' => 'Held with', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("investments.{$investments_key}.value", ['label' => 'Approximate value', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>

                    </div>


                    <div class="text-danger collapse" id="investError">If has,please give at least one investment
                        detail
                    </div>


                </div>


                <!--  Section2:add Loans and debts div  -->
                <div class="ff-el-group">
                    <h4>Loans and debts</h4>
                </div>

                <div class="mb-4">
                    <div class="label">
                        <label for="details_youowe">Details of money you owe:</label>
                    </div>
                    <div>
                        <textarea name="details_youowe" id="details_youowe" class="form-control"
                                  style="height: 92px;width: 100%; "></textarea>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="label">
                        <label for="has_owe_agreement">Is there a loan agreement?</label>
                    </div>
                    <!--   Yes/No selection    -->
                    <?=
                    $this->element('yesnoRadio', [
                        'inputName' => 'has_owe_agreement',
                    ]);
                    ?>
                </div>

                <div class="mb-4">
                    <div class="label">
                        <label for="details_youowed">Details of money owed to you:</label>
                    </div>
                    <div>
                        <textarea name="details_youowed" id="details_youowed" class="form-control"
                                  style="height: 92px;width: 100%; "></textarea>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="label">
                        <label for="has_owed_agreement">Is there a loan agreement?</label>
                    </div>
                    <!--   Yes/No selection    -->
                    <?=
                    $this->element('yesnoRadio', [
                        'inputName' => 'has_owed_agreement',
                    ]);
                    ?>
                </div>

                <div class="mb-4">
                    <div class="label">
                        <label>Repayment to estate?</label>
                    </div>
                    <!--   Yes/No selection    -->
                    <div class="yesNo d-flex">
                        <div class="yesArea">
                            <label class="yesLabel">
                                <input type="radio" name="repay_estate"
                                       class="" value="To be repaid">
                                <span class="yes">To be repaid</span>
                            </label>
                        </div>
                        <div class="noArea">
                            <label class="noLabel">
                                <input type="radio" name="repay_estate"
                                       class="" value="To be forgiven">
                                <span class="no">To be forgiven</span>
                            </label>
                        </div>
                    </div>
                </div>


                <!--   Section3:add Insurance div  -->
                <div class="ff-el-group">
                    <h4>Insurance</h4>
                </div>

                <div class="mb-4 row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="label">
                            <label>House and Contents:</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'insure_house',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourInsuranceHouse" class="col-12 col-lg-6 collapse">
                        <div class="label">
                            <label>Company</label>
                        </div>
                        <input type="text" name="insure_house_company" class="form-control">
                    </div>
                </div>

                <div class="mb-4 row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="label">
                            <label>Vehicle insurance</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'insure_vehicle',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourInsuranceVehicle" class="col-12 col-lg-6 collapse">
                        <div class="label">
                            <label>Company</label>
                        </div>
                        <input type="text" name="insure_vehicle_company" class="form-control">
                    </div>
                </div>

                <div class="mb-4 row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="label">
                            <label>Health insurance</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'insure_health',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourInsuranceHealth" class="col-12 col-lg-6 collapse">
                        <div class="label">
                            <label>Company</label>
                        </div>
                        <input type="text" name="insure_health_company" class="form-control">
                    </div>
                </div>

                <div class="mb-4 row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="label">
                            <label>Life insurance</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'insure_life',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourInsuranceLife" class="col-12 col-lg-6 collapse">
                        <div class="label">
                            <label>Company</label>
                        </div>
                        <input type="text" name="insure_life_company" class="form-control">
                    </div>
                </div>


                <!--                Superannuation-->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5  fw-bold">Superannuation</label>
                        </div>
                        <div>
                            <label>Do you have any Superannuation?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_superannuation',
                        ]);
                        ?>
                    </div>
                    <div id="yourSuperannuation" class="collapse">
                        <div id="superannuation-container">

                        </div>


                        <script id="superannuation-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-3 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("superannuations.{$superannuations_key}.fund", ['label' => 'Fund', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-3 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("superannuations.{$superannuations_key}.value", ['label' => 'Value', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-3 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("superannuations.{$superannuations_key}.nomination", ['label' => 'Current Nomination', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-3 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("superannuations.{$superannuations_key}.binding", [
                                                'options' => [
                                                    'Yes', 'No', 'unsure'
                                                ],
                                                'empty' => 'Select...',
                                                'class' => 'form-select text-grey',
                                                'label' => 'Binding'
                                            ]); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>

                    </div>


                    <div class="text-danger collapse" id="superannuationError">If has,please give at least one
                        superannuation detail
                    </div>


                </div>


                <!--  Previous + next button  -->
                <div class="clearfix">
                    <a class="btn btn-outline-secondary mt-3 float-start" id="page3Prev">Previous</a>
                    <a class="btn btn-shelbourne mt-3 rounded-pill px-4 py-2 float-end" id="page3Next">Next</a>
                </div>

            </div>


            <!--  Page 4        -->
            <div id="page4" class="collapse">
                <div class="text-muted mt-3">Step 4 of 4 - Step 4</div>
                <div class="progress my-2">
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 75%;"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%
                    </div>
                </div>


                <div class="ff-el-group">
                    <h2>3. Executor/Trustee</h2>
                </div>

                <!--      Executors          -->
                <div class="ff-el-group">
                    <h4>Who do you want your executor(s) to be?</h4>
                </div>
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5  fw-bold">Executors</label>
                            <a class="d-inline-block" data-bs-toggle="tooltip"
                               data-bs-original-title="Your executor is the person appointed to administer your estate and carry out your wishes after your death. This means they may have to collect assets, pay any debts, arrange your funeral, distribute your estate according to your will and, if necessary, take  or defend legal action on behalf of your estate. You may wish to appoint one primary Executor and an alternate executor, or you may appoint up to 4 primary executors and/or alternate executors to act jointly if you prefer. They should be people who can work together."
                               data-bs-placement="right">
                                <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                     height="15px" width="15px">
                                    <path
                                        d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                                </svg>
                            </a>
                        </div>
                    </div>


                    <div id="yourExecutors">
                        <div id="executor-container">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("executors.0.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("executors.0.address", ['label' => 'Address', 'class' => 'form-control']); ?>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("executors.0.relation", ['label' => 'Relationship to You', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <script id="executor-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("executors.{$executors_key}.name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("executors.{$executors_key}.address", ['label' => 'Address', 'class' => 'form-control']); ?>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("executors.{$executors_key}.relation", ['label' => 'Relationship to You', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>

                    </div>


                </div>

                <!--      Alternative Executors          -->
                <div class="ff-el-group">
                    <h4>Who do you want your alternative executor(s) to be?</h4>
                </div>
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5 fw-bold">Alternative Executors</label>
                        </div>
                    </div>

                    <div id="yourAltExecutors">
                        <div id="altexecutor-container">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("altexecutors.0.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("altexecutors.0.address", ['label' => 'Address', 'class' => 'form-control']); ?>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("altexecutors.0.relation", ['label' => 'Relationship to You', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <script id="altexecutor-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("altexecutors.{$altexecutors_key}.name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("altexecutors.{$altexecutors_key}.address", ['label' => 'Address', 'class' => 'form-control']); ?>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-4 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("altexecutors.{$altexecutors_key}.relation", ['label' => 'Relationship to You', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>

                    </div>
                </div>

                <!--  4.Guardian   -->
                <div class="ff-el-group">
                    <h2>4. Guardian of Minor Children</h2>
                </div>
                <div class="mb-4">
                    <div class="label">
                        <label>Do you wish to appoint a guardian of minor children?</label>
                    </div>
                    <!--   Yes/No selection    -->
                    <?=
                    $this->element('yesnoRadio', [
                        'inputName' => 'wish_appoint_child',
                    ]);
                    ?>


                    <!--    hidden inputs       -->
                    <div id="yourGuardian" class="collapse">
                        <div class="row g-0">
                            <div class="col-12 col-lg-4 pe-md-2">
                                <div class="label">
                                    <label>Full Name of Surviving Parent</label>
                                </div>
                                <input type="text" id="surviving_parent_fullname" name="surviving_parent_fullname"
                                       class="form-control">
                                <div class="invalid-feedback">Please check the name format</div>
                            </div>

                            <div class="col-12 col-lg-4 px-md-2">
                                <div class="label">
                                    <label>Guardian’s Full Name</label>
                                </div>
                                <input type="text" id="guardian_fullname" name="guardian_fullname" class="form-control">
                                <div class="invalid-feedback">Please check the name format</div>
                            </div>

                            <div class="col-12 col-lg-4 ps-md-2">
                                <div class="label">
                                    <label>Guardian’s Relationship to You</label>
                                </div>
                                <input type="text" name="guardian_relation" class="form-control">
                            </div>

                        </div>
                    </div>

                </div>

                <!-- 5. Specific Bequests  -->
                <div class="ff-el-group">
                    <h2>5. Specific Bequests</h2>
                </div>
                <div class="mb-4">
                    <div class="label">
                        <label>Do you wish to leave any specific items of property to a particular person?</label>
                    </div>
                    <!--   Yes/No selection    -->
                    <?=
                    $this->element('yesnoRadio', [
                        'inputName' => 'wish_property_special',
                    ]);
                    ?>


                    <!--    hidden inputs       -->
                    <div id="yourSpecial" class="collapse">
                        <div class="label">
                            <label class="text-danger">*If yes</label>
                        </div>
                        <div id="special-container">

                        </div>


                        <script id="special-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-6 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("bequests.{$bequests_key}.name", ['label' => 'Name of Beneficiary', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("bequests.{$bequests_key}.description", ['label' => 'Description of the property', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>

                    </div>


                    <div class="text-danger collapse" id="specialError">please give at least one special bequest
                        detail
                    </div>

                </div>


                <!-- 6. Beneficiaries of the Residue  -->
                <div class="ff-el-group">
                    <h2>6. Beneficiaries of the Residue</h2>
                </div>

                <div id="yourBeneficiaries">
                    <!--                6.1-->
                    <div class="mb-4">
                        <div class="label">
                            <label class="fw-bold">Who do you wish to leave the balance of your estate to?</label>
                        </div>
                        <div id="yourLeaveEstate">
                            <div id="leaveEstate-container">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-6 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("beneficiaries.0.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->control("beneficiaries.0.situation", ['type' => 'hidden', 'value' => 'Who do you wish to leave the balance of your estate to?']); ?>
                                    <div class="col-12 col-lg-6 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("beneficiaries.0.relation", ['label' => 'Relationship To you', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <script id="leaveEstate-template" type="text/x-underscore-template">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-6 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.situation", ['type' => 'hidden', 'value' => 'Who do you wish to leave the balance of your estate to?']); ?>
                                    <div class="col-12 col-lg-6 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.relation", ['label' => 'Relationship To you', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </script>
                        </div>
                    </div>
                    <!--                6.2  -->
                    <div class="mb-4">
                        <div class="label">
                            <label class="fw-bold">If something happens to the above beneficiary(ies), who do you wish
                                to
                                leave the balance of your estate to?</label>
                        </div>
                        <div id="yourLeaveEstateSecond">
                            <div id="leaveEstateSecond-container">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-6 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("beneficiaries.1.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->control("beneficiaries.1.situation", ['type' => 'hidden', 'value' => 'If something happens to the above beneficiary(ies), who do you wish to leave the balance of your estate to?']); ?>
                                    <div class="col-12 col-lg-6 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("beneficiaries.1.relation", ['label' => 'Relationship To you', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <script id="leaveEstateSecond-template" type="text/x-underscore-template">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-6 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.situation", ['type' => 'hidden', 'value' => 'If something happens to the above beneficiary(ies), who do you wish to leave the balance of your estate to?']); ?>
                                    <div class="col-12 col-lg-6 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.relation", ['label' => 'Relationship To you', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </script>
                        </div>
                    </div>
                    <!--                6.3  -->
                    <div class="mb-4">
                        <div class="label">
                            <label class="fw-bold">Is there anyone who you feel a responsibility to provide for not
                                mentioned in your Will? If Yes – Please list</label>
                        </div>
                        <div id="yourFeelResp">
                            <div id="feelResp-container">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-6 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("beneficiaries.2.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->control("beneficiaries.2.situation", ['type' => 'hidden', 'value' => 'Is there anyone who you feel a responsibility to provide for not mentioned in your Will? If Yes – Please list']); ?>
                                    <div class="col-12 col-lg-6 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("beneficiaries.2.relation", ['label' => 'Relationship To you', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <script id="feelResp-template" type="text/x-underscore-template">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-6 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.situation", ['type' => 'hidden', 'value' => 'Is there anyone who you feel a responsibility to provide for not mentioned in your Will? If Yes – Please list']); ?>
                                    <div class="col-12 col-lg-6 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.relation", ['label' => 'Relationship To you', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </script>
                        </div>
                    </div>
                    <!--                6.4  -->
                    <div class="mb-4">
                        <div class="label">
                            <label class="fw-bold">Are there any special provisions or instructions you wish to cover in
                                your Will? If Yes – Please list</label>
                        </div>
                        <div id="yourProvision">
                            <div id="provision-container">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-6 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("beneficiaries.3.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->control("beneficiaries.3.situation", ['type' => 'hidden', 'value' => 'Are there any special provisions or instructions you wish to cover in your Will? If Yes – Please list']); ?>
                                    <div class="col-12 col-lg-6 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("beneficiaries.3.relation", ['label' => 'Relationship To you', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <script id="provision-template" type="text/x-underscore-template">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-6 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.situation", ['type' => 'hidden', 'value' => 'Are there any special provisions or instructions you wish to cover in your Will? If Yes – Please list']); ?>
                                    <div class="col-12 col-lg-6 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("beneficiaries.{$beneficiaries_key}.relation", ['label' => 'Relationship To you', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </script>
                        </div>
                    </div>
                </div>


                <!-- 7. Enduring Powers of Attorney and Medical Decision Makers  -->
                <div class="ff-el-group">
                    <h2>7. Enduring Powers of Attorney and Medical Decision Makers</h2>
                </div>
                <div class="label">
                    <label>An enduring power of attorney is a legal document that lets you appoint someone to make
                        decisions about personal or financial matters. This person is called an attorney. The power
                        endures - or continues - if and when you are unable to make decisions.</label>
                </div>

                <!--                7.1:Attorneys-->
                <div class="mb-4">
                    <div class="label">
                        <label class="fw-bold">Who do you want your attorney(s) to be?</label>
                    </div>
                    <div id="yourAttorney">
                        <div id="attorney-container">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-6 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("attorneys.0.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-6 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("executors.0.relation", ['label' => 'Relationship to You', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <script id="attorney-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-6 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("attorneys.{$attorneys_key}.name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("executors.{$attorneys_key}.relation", ['label' => 'Relationship to You', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>
                    </div>
                </div>

                <!--                7.2:Altattorneys-->
                <div class="mb-4">
                    <div class="label">
                        <label class="fw-bold">Who do you want your alternative attorney(s) to be?</label>
                    </div>
                    <div id="yourAltAttorney">
                        <div id="altattorney-container">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-6 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("altattorneys.0.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                    </div>
                                </div>


                                <div class="col-12 col-lg-6 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("altattorneys.0.relation", ['label' => 'Relationship to You', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <script id="altattorney-template" type="text/x-underscore-template">
                            <div class="row g-0 inputsRow">
                                <div class="col-12 col-lg-6 pe-lg-2">
                                    <div class="form-group">
                                        <?php echo $this->Form->control("altattorneys.{$altattorneys_key}.name", ['label' => 'Full Name', 'class' => 'form-control']); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 row g-0">
                                    <div class="col-12 col-lg-10">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("altattorneys.{$altattorneys_key}.relation", ['label' => 'Relationship to You', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <div class="row g-0">
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn add">
                                                    <span class="fas fa-plus-circle"></span>
                                                </a>
                                            </div>
                                            <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                <a class="btn delete">
                                                    <span class="fas fa-minus-circle"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </script>
                    </div>
                </div>


                <!--                7.3 select-->
                <div class="mb-4">
                    <div class="label">
                        <label class="fw-bold">If naming more than one attorney, how would you like them to make
                            decisions?</label>
                    </div>
                    <div id="yourAttorneyDecision">
                        <div class="label">
                            <label>Please select</label>
                        </div>
                        <div class="row g-0">
                            <div class="col-12 col-lg-11">
                                <select class="form-select text-grey" name="way_attorney_decision">
                                    <option selected value="">Select...</option>
                                    <option value="Jointly">Jointly - the attorneys must all agree</option>
                                    <option value="Separately">Separately - each alternative attorney must make
                                        decisions separately
                                    </option>
                                    <option value="jointly and Separately">jointly and Separately - attorneys can make
                                        decisions separately but if they make a joint decision, they must all agree
                                    </option>
                                </select>
                            </div>

                        </div>


                    </div>
                </div>


                <!-- MEDICAL DECISION MAKER -->
                <div class="my-4">
                    <div class="label">
                        <label class="fs-5 fw-bold">MEDICAL DECISION MAKER</label>
                    </div>

                    <div id="yourBankAccount">
                        <div class="label">
                            <label>A person to make medical decisions if you cannot give consent. Your medical decision
                                maker is the first person on the list who is reasonably available, and willing and able
                                to make the decision</label>
                        </div>


                        <div id="yourDecisionMaker">
                            <div id="decisionMaker-container">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-4 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("decisionmakers.0.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("decisionmakers.0.dob", ['label' => 'Date of Birth', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-4 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("decisionmakers.0.phone", ['label' => 'Phone', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <script id="decisionMaker-template" type="text/x-underscore-template">
                                <div class="row g-0 inputsRow">
                                    <div class="col-12 col-lg-4 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("decisionmakers.{$decisionMakers_key}.name", ['label' => 'Full Name', 'class' => 'form-control', 'required' => false]); ?>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4 pe-lg-2">
                                        <div class="form-group">
                                            <?php echo $this->Form->control("decisionmakers.{$decisionMakers_key}}.dob", ['label' => 'Date of Birth', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-4 row g-0">
                                        <div class="col-12 col-lg-10">
                                            <div class="form-group">
                                                <?php echo $this->Form->control("decisionmakers.{$decisionMakers_key}}.phone", ['label' => 'Phone', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2">
                                            <div class="row g-0">
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn add">
                                                        <span class="fas fa-plus-circle"></span>
                                                    </a>
                                                </div>
                                                <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                                    <a class="btn delete">
                                                        <span class="fas fa-minus-circle"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </script>
                        </div>




                    </div>
                </div>


                <!-- 7. Enduring Powers of Attorney and Medical Decision Makers  -->
                <div class="ff-el-group">
                    <h2>8. Additional notes</h2>
                </div>
                <div class="mb-4">
                        <textarea name="addition_notes" id="addition_notes" class="form-control"
                                  style="height: 100px;width: 100%; "></textarea>
                </div>


                <!--      Privacy Policy          -->
                <div class="label">
                    <h4>Privacy Policy</h4>
                    <div class="label">
                        <label>
                            At Shelbourne Legal, we take
                            privacy and security of your personal information very seriously. &nbsp;Shelbourne Legal
                            will only use your personal information for the purpose for which you have provided it. We
                            will not disclose your personal information to third parties, unless you have consented to
                            such disclosure or in other circumstances where such disclosure is required or permitted by
                            law.
                        </label>
                    </div>
                    <div class="label">
                        <label for="">
                            We endeavour to keep all personal
                            information safe by taking all reasonable precautions to protect personal information from
                            misuse, loss, unauthorised access, modification or disclosure.
                        </label>
                    </div>
                </div>


                <!--    Recapture verification    -->
                <div id="form_recaptcha" class="g-recaptcha"
                     data-sitekey="<?= RECAPTCHAV2_SITEKEY ?>">
                </div>
                <?= $this->Flash->render() ?>


                <!-- Previous + Submit button -->
                <div class="clearfix">
                    <a class="btn btn-outline-secondary mt-3 float-start" id="page4Prev">Previous</a>

                    <div class="float-none text-center mt-3 float-md-end mt-md-0">
                        <?= $this->Form->button(__('Submit'), ['id' => 'submitIntakeform', 'class' => 'btn btn-shelbourne rounded-pill fw-bold w-100 px-4 py-2']) ?>
                    </div>
                </div>
            </div>

            <?= $this->Form->end() ?>


        </div>
    </div>
</main>


<!-- Render the Recapture -->
<script type="text/javascript">
    var widgetId1;
    var onloadCallback = function () {
        widgetId1 = grecaptcha.render('form_recaptcha', {
            'sitekey': "<?=RECAPTCHAV2_SITEKEY?>",
        });

    };
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
