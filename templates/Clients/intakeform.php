<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
$this->assign('title', 'Intake Form');
$this->Html->css('intakeform', ['block' => true]);
$this->Html->script('intakeform', ['block' => true]);
?>


<main class="main">
    <div class="container">
        <div id="content">

            <div class="form-title">
                Wills & Estates Intake Form
            </div>

            <!-- Page 1           -->
            <div id="page1" class="collapse show">

                <div class="text-muted mt-3">Step 1 of 4 - Step 1</div>
                <div class="progress my-2">
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 0%;"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
                    </div>
                </div>

                <!-- $this->Form->create($client, ["method" => "post"])    -->
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
                            <label>Preferred Name</label>
                        </div>
                        <input id="inputPrevName" type="text" name="previousName" class="form-control" maxlength="20">
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
                               placeholder="dd/mm/yyyy" onfocus="(this.type='date')" onblur="(this.type='text')"
                               required/>
<!--                         pattern="\d{1,2}[/]\d{1,2}[/]\d{4}"-->
                        <div class="invalid-feedback" id="dateError">Please provide your date of birth</div>
                    </div>
                    <div class="mb-3 col-12 col-md-6 ps-md-3">
                        <div class="label required">
                            <label>Occupation</label>
                        </div>
                        <input type="text" id="inputOccupation" name="occupation" class="form-control"
                               required/>
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
                        <input id="inputSuburb" type="text" name="suburb" class="form-control"
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
                    <!-- PostCode -->
                    <div class="col-12 col-md-4 px-md-3">
                        <div class="label required">
                            <label>Postcode</label>
                        </div>
                        <input type="zip" name="postCode" id="inputPostCode" class="form-control" maxlength="4"
                               pattern="[1-9][0-9]{3}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                               required/>
                        <div class="invalid-feedback" id="postcodeError">Please provide your post code</div>
                    </div>
                    <!--  Postal address   -->
                    <div class="col-12 col-md-4 ps-md-3">
                        <div class="label">
                            <label>Postal address</label>
                        </div>
                        <input type="text" name="postal_address" id="inputPostAddress" class="form-control"/>
                        <div class="invalid-feedback" id="postalAddressError">Please provide your postal address</div>
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
                                <label>Proof of Identification(always required)</label>
                            </div>
                            <!--                            <select class="form-select text-grey" id="inputProofId" name="proof_id" required>-->
                            <!--                                <option selected class="text-muted">Choose your id type</option>-->
                            <!--                                <option value="password" class="text-dark">Password</option>-->
                            <!--                                <option value="driver licence" class="text-dark">Driver's Licence</option>-->
                            <!--                                <option value="medical card" class="text-dark">Medical Card</option>-->
                            <!--                                <option value="Age card" class="text-dark">Age Card</option>-->
                            <!--                            </select>-->
                            <ul>
                                <li>Proof of your identity, such as a passport, or a driver's licence and a bank card
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
                </div>


                <!--                Documents Overview-->
                <div class="card  mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-shelbourne fw-bold">Documents to bring</h5>
                        <h6 class="card-subtitle mt-2">Please bring/email your existing docs before your first
                            appointment.</h6>
                        <p class="card-text text-grey">
                        <ol id="documentsToBring" class="list-group-numbered">
                            <li>Identification(always required)</li>
                            <li class="collapse">Your existing will</li>
                            <li class="collapse">Your existing power of attorney</li>
                            <li class="collapse">Your binding Death Benefit Nominations</li>
                            <li class="collapse">Your existing medical treatment decision maker appointment</li>
                            <li class="collapse">Copy of Self Managed Superannuation Trust Deed</li>
                            <li class="collapse">Copy of Family Trust Deed</li>
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
                            <?=
                            $this->element('childInputs', [
                                'relation' => 'child'
                            ]);
                            ?>

                        </div>

                        <!--     1.5 Your Grandchildren    -->
                        <div id="yourGrandChildren">
                            <div class="label">
                                <label>1.5 Your Grandchildren (including step, adopted grandchildren)</label>
                            </div>
                            <!--   child inputs    -->
                            <?=
                            $this->element('childInputs', [
                                'relation' => 'grandchild'
                            ]);
                            ?>


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
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-5 pe-md-2">
                                <div class="label">
                                    <label>Full Name</label>
                                </div>
                                <input type="text" name="hh_fullName[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-5 pe-md-2">
                                <div class="label">
                                    <label>Relationship to you</label>
                                </div>
                                <input type="text" name="hh_relation[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-2">
                                <div class="row g-0">
                                    <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                        <a class="btn add">
                                            <span class="fas fa-plus-circle"></span>
                                        </a>
                                    </div>
                                    <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                                        <a class="btn delete">
                                            <span class="fas fa-minus-circle"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

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
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Full Name</label>
                                </div>
                                <input type="text" name="dependent_fullName[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Relationship to you</label>
                                </div>
                                <input type="text" name="dependent_relation[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Nature of dependency</label>
                                </div>
                                <input type="text" name="dependent_nature[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3">
                                <div class="row g-0">
                                    <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                        <a class="btn add">
                                            <span class="fas fa-plus-circle"></span>
                                        </a>
                                    </div>
                                    <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                                        <a class="btn delete">
                                            <span class="fas fa-minus-circle"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

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
                        <?=  $this->element('page3Helper'); ?>
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
                        <?=  $this->element('page3Helper'); ?>
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
                            <label>Do you have a Referral?</label>
                        </div>
                        <!--   Yes/No selection    -->
                        <?=
                        $this->element('yesnoRadio', [
                            'inputName' => 'has_referrer',
                        ]);
                        ?>
                    </div>

                    <!--    hidden inputs       -->
                    <div id="yourReferral" class="collapse">
                        <div class="label">
                            <label class="text-danger">*If yes</label>
                        </div>
                        <?=  $this->element('page3Helper'); ?>
                    </div>
                </div>



                <!-- 2.Assets & Liabilities  -->
                <div class="ff-el-group">
                    <h2>2. Assets & Liabilities</h2>
                </div>

                <!--       Real estate         -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5">Real estate</label>
                        </div>
                    </div>

                    <div id="yourRealEstate">
                        <div></div>
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-2 pe-md-2">
                                <div class="label">
                                    <label>Address</label>
                                </div>
                                <input type="text" name="realestate_address[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-2 pe-md-2">
                                <div class="label">
                                    <label>Owner(s):</label>
                                </div>
                                <input type="text" name="realestate_owner[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-2 pe-md-2">
                                <div class="label">
                                    <label>Type of ownership:</label>
                                </div>
                                <select class="form-select text-grey" name="realestate_type[]">
                                    <option selected value="">Select...</option>
                                    <option value="Sole">Sole</option>
                                    <option value="Joint">Joint</option>
                                    <option value="Tenants in Common">Tenants in Common</option>
                                    <option value="Unsure">Unsure</option>
                                </select>
                            </div>

                            <div class="col-12 col-lg-2 pe-md-2">
                                <div class="label">
                                    <label>Location of title:</label>
                                </div>
                                <input type="text" name="realestate_location[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-2 pe-md-2">
                                <div class="label">
                                    <label>Mortgage:</label>
                                </div>
                                <select class="form-select text-grey" name="realestate_mortgage[]">
                                    <option selected value="">Select...</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="col-12 col-lg-2 row g-0">
                                <div class="col-12 col-lg-10">
                                    <div class="label">
                                        <label>Property value:</label>
                                    </div>
                                    <input type="text" name="realestate_value[]" class="form-control">
                                </div>
                                <div class="col-12 col-lg-2" >
                                    <div class="row g-0">
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                            <a class="btn add">
                                                <span class="fas fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                                            <a class="btn delete">
                                                <span class="fas fa-minus-circle"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!--      Bank Accounts          -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5">Bank Accounts</label>
                        </div>
                    </div>

                    <div id="yourBankAccount">
                        <div></div>
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Bank Institution:</label>
                                </div>
                                <input type="text" name="bankAccount_name[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Account holder(s):</label>
                                </div>
                                <input type="text" name="bankAccount_holder[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Account type:</label>
                                </div>
                                <input type="text" name="bankAccount_type[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3 row g-0">
                                <div class="col-12 col-lg-10">
                                    <div class="label">
                                        <label>Approximate value:</label>
                                    </div>
                                    <input type="text" name="bankAccount_value[]" class="form-control">
                                </div>
                                <div class="col-12 col-lg-2" >
                                    <div class="row g-0">
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                            <a class="btn add">
                                                <span class="fas fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                                            <a class="btn delete">
                                                <span class="fas fa-minus-circle"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!--       Motor vehicles         -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5">Motor vehicles</label>
                        </div>
                    </div>

                    <div id="yourMotor">
                        <div></div>
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-4 pe-md-2">
                                <div class="label">
                                    <label>Make</label>
                                </div>
                                <input type="text" name="motor_make[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-4 pe-md-2">
                                <div class="label">
                                    <label>Model</label>
                                </div>
                                <input type="text" name="motor_model[]" class="form-control">
                            </div>


                            <div class="col-12 col-lg-4 row g-0">
                                <div class="col-12 col-lg-10">
                                    <div class="label">
                                        <label>Year</label>
                                    </div>
                                    <input type="text" name="motor_year[]" class="form-control">
                                </div>
                                <div class="col-12 col-lg-2" >
                                    <div class="row g-0">
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                            <a class="btn add">
                                                <span class="fas fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                                            <a class="btn delete">
                                                <span class="fas fa-minus-circle"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!--        Investments        -->
                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5">Investments</label>
                        </div>
                    </div>

                    <div id="yourInvestment">
                        <div></div>
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-4 pe-md-2">
                                <div class="label">
                                    <label>Type:</label>
                                </div>
                                <input type="text" name="invest_type[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-4 pe-md-2">
                                <div class="label">
                                    <label>Held with:</label>
                                </div>
                                <input type="text" name="invest_holdwith[]" class="form-control">
                            </div>


                            <div class="col-12 col-lg-4 row g-0">
                                <div class="col-12 col-lg-10">
                                    <div class="label">
                                        <label>Approximate value:</label>
                                    </div>
                                    <input type="text" name="invest_value[]" class="form-control">
                                </div>
                                <div class="col-12 col-lg-2" >
                                    <div class="row g-0">
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                            <a class="btn add">
                                                <span class="fas fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                                            <a class="btn delete">
                                                <span class="fas fa-minus-circle"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

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

                <div class="mb-4">
                    <div>
                        <div class="label">
                            <label class="fs-5">Superannuation</label>
                        </div>
                    </div>

                    <div id="yourSuperannuation">
                        <div></div>
                        <div class="row g-0 inputsRow">
                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Fund</label>
                                </div>
                                <input type="text" name="superannuation_fund[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Value</label>
                                </div>
                                <input type="text" name="superannuation_value[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3 pe-md-2">
                                <div class="label">
                                    <label>Current Nomination</label>
                                </div>
                                <input type="text" name="superannuation_nomi[]" class="form-control">
                            </div>

                            <div class="col-12 col-lg-3 row g-0">
                                <div class="col-12 col-lg-10">
                                    <div class="label">
                                        <label>Binding</label>
                                    </div>
                                    <select class="form-select text-grey" name="superannuation_Binding[]">
                                        <option selected value="">Select...</option>
                                        <option value="yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Unsure">Unsure</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-2" >
                                    <div class="row g-0">
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0">
                                            <a class="btn add">
                                                <span class="fas fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <div class="col-1 col-lg-12 mt-2 mt-lg-0 collapse">
                                            <a class="btn delete">
                                                <span class="fas fa-minus-circle"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





                <!--  Section4:add Businesses div  -->
                <div class="ff-el-group">
                    <h4>Businesses</h4>
                </div>
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


                <div class="ff-el-group mt-4" data-name="custom_html-7816594526301c876c25822.33748729"><h2>3.
                        Executor/Trustee</h2> <h4><span style="font-weight: 400;">Who do you want your executor(s) to be?</span>
                    </h4></div>
                <div data-type="repeater_field" data-name="repeater_field_14"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_14">
                    <div class="ff-el-input--label asterisk-right label"><label for="">Executors</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_14"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Executor's Full
                                            Name</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Executor's
                                            Address</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Executor's
                                            Relationship to You</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Executor's Full Name">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="Executor's Full Name"
                                                                                 name="repeater_field_14[0][]"
                                                                                 id="ff_1_repeater_field_14_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_14_0_0"
                                                                                 data-error_index="repeater_field_14[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Executor's Address">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_14[0][]"
                                                                                 id="ff_1_repeater_field_14_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_14_1_0"
                                                                                 data-error_index="repeater_field_14[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Executor's Relationship to You">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_14[0][]"
                                                                                 id="ff_1_repeater_field_14_2"
                                                                                 data-repeater_index="2"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_14_2_0"
                                                                                 data-error_index="repeater_field_14[2]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ff-el-group" data-name="custom_html-4593379706301c876c262b9.49987386"><h4><span
                            style="font-weight: 400;">Who do you want your alternative executor(s) to be?</span></h4>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_15"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_15">
                    <div class="ff-el-input--label asterisk-right label"><label for="">Alternative Executors</label>
                    </div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_15"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Alternative
                                            Executor's Full Name</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Alternative
                                            Executor's Address</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Alternative
                                            Executor's Relationship to You</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Alternative Executor's Full Name">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="Alternative Executor's Full Name"
                                                                                 name="repeater_field_15[0][]"
                                                                                 id="ff_1_repeater_field_15_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_15_0_0"
                                                                                 data-error_index="repeater_field_15[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Alternative Executor's Address">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="Alternative Executor's Address"
                                                                                 name="repeater_field_15[0][]"
                                                                                 id="ff_1_repeater_field_15_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_15_1_0"
                                                                                 data-error_index="repeater_field_15[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Alternative Executor's Relationship to You">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="Alternative Executor's Relationship to You"
                                                                                 name="repeater_field_15[0][]"
                                                                                 id="ff_1_repeater_field_15_2"
                                                                                 data-repeater_index="2"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_15_2_0"
                                                                                 data-error_index="repeater_field_15[2]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ff-el-group" data-name="custom_html-16611452446301c876c26f97.63407421"><h2>4. Guardian of
                        Minor Children</h2></div>
                <div class="ff-el-group  ff_list_buttons">
                    <div class="ff-el-input--label asterisk-right label"><label>Do you wish to appoint a guardian of
                            minor children?</label></div>
                    <div class="ff-el-input--content">
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_21_2dbae6093a77dec3b517930a58c3c36a"><input
                                    type="radio" name="input_radio_21" data-name="input_radio_21"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                    id="input_radio_21_2dbae6093a77dec3b517930a58c3c36a"> <span>Yes</span></label></div>
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_21_d717bfe811857c38bcaeab34d203b690"><input
                                    type="radio" name="input_radio_21" data-name="input_radio_21"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                    id="input_radio_21_d717bfe811857c38bcaeab34d203b690"> <span>No</span></label></div>
                    </div>
                </div>
                <div data-name="ff_cn_id_16" class="ff-t-container ff-column-container ff_columns_total_3  ">
                    <div class="ff-t-cell ff-t-column-1">
                        <div class="ff-el-group has-conditions ff_excluded" style="">
                            <div class="ff-el-input--label asterisk-right label"><label for="ff_1_input_text_27">Full
                                    Name of Surviving Parent </label></div>
                            <div class="ff-el-input--content"><input type="text" name="input_text_27"
                                                                     class="ff-el-form-control"
                                                                     data-name="input_text_27" id="ff_1_input_text_27">
                            </div>
                        </div>
                    </div>
                    <div class="ff-t-cell ff-t-column-2">
                        <div class="ff-el-group has-conditions ff_excluded" style="">
                            <div class="ff-el-input--label asterisk-right label"><label for="ff_1_input_text_28">Guardian’s
                                    Full Name</label></div>
                            <div class="ff-el-input--content"><input type="text" name="input_text_28"
                                                                     class="ff-el-form-control"
                                                                     data-name="input_text_28" id="ff_1_input_text_28">
                            </div>
                        </div>
                    </div>
                    <div class="ff-t-cell ff-t-column-3">
                        <div class="ff-el-group has-conditions ff_excluded" style="">
                            <div class="ff-el-input--label asterisk-right label"><label for="ff_1_input_text_29">Guardian’s
                                    Relationship to You</label></div>
                            <div class="ff-el-input--content"><input type="text" name="input_text_29"
                                                                     class="ff-el-form-control"
                                                                     data-name="input_text_29" id="ff_1_input_text_29">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ff-el-group" data-name="custom_html-18812652486301c876c27e73.96395513"><h2>5. Specific
                        Bequests</h2></div>
                <div class="ff-el-group  ff_list_buttons">
                    <div class="ff-el-input--label asterisk-right label"><label>Do you wish to leave any specific items
                            of property to a particular person?</label></div>
                    <div class="ff-el-input--content">
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_22_b1b082225418a1971b72dd9d47b8c894"><input
                                    type="radio" name="input_radio_22" data-name="input_radio_22"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                    id="input_radio_22_b1b082225418a1971b72dd9d47b8c894"> <span>Yes</span></label></div>
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_22_54bdc91736b145199aac4df6a00868b0"><input
                                    type="radio" name="input_radio_22" data-name="input_radio_22"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                    id="input_radio_22_54bdc91736b145199aac4df6a00868b0"> <span>No</span></label></div>
                    </div>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_9"
                     class="ff-el-group ff-el-repeater js-repeater has-conditions ff_excluded"
                     data-root_name="repeater_field_9" style="">
                    <div class="ff-el-input--label asterisk-right"><label for="">If yes</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_9"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for=""> Description of
                                            the Property</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Name of
                                            Beneficiary</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label=" Description of the Property">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_9[0][]"
                                                                                 id="ff_1_repeater_field_9_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_9_0_0"
                                                                                 data-error_index="repeater_field_9[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Name of Beneficiary">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_9[0][]"
                                                                                 id="ff_1_repeater_field_9_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_9_1_0"
                                                                                 data-error_index="repeater_field_9[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ff-el-group" data-name="custom_html-4936556166301c876c28982.11353455"><h2>6. Beneficiaries
                        of the Residue</h2></div>
                <div data-type="repeater_field" data-name="repeater_field_10"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_10">
                    <div class="ff-el-input--label asterisk-right label"><label for="">Who do you wish to leave the
                            balance of your estate to?</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_10"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Full name</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Relationship To
                                            You</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Full name">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_10[0][]"
                                                                                 id="ff_1_repeater_field_10_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_10_0_0"
                                                                                 data-error_index="repeater_field_10[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Relationship To You">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_10[0][]"
                                                                                 id="ff_1_repeater_field_10_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_10_1_0"
                                                                                 data-error_index="repeater_field_10[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_11"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_11">
                    <div class="ff-el-input--label asterisk-right label"><label for="">If something happens to the above
                            beneficiary (ies), who do you wish to leave the balance of your estate to?</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_11"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Full name</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Relationship To
                                            You</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Full name">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_11[0][]"
                                                                                 id="ff_1_repeater_field_11_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_11_0_0"
                                                                                 data-error_index="repeater_field_11[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Relationship To You">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_11[0][]"
                                                                                 id="ff_1_repeater_field_11_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_11_1_0"
                                                                                 data-error_index="repeater_field_11[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_12"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_12">
                    <div class="ff-el-input--label asterisk-right label"><label for=""> Is there anyone who you feel a
                            responsibility to provide for not mentioned in your Will? If Yes – Please list</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_12"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Full name</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Relationship To
                                            You</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Full name">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_12[0][]"
                                                                                 id="ff_1_repeater_field_12_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_12_0_0"
                                                                                 data-error_index="repeater_field_12[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Relationship To You">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_12[0][]"
                                                                                 id="ff_1_repeater_field_12_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_12_1_0"
                                                                                 data-error_index="repeater_field_12[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_13"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_13">
                    <div class="ff-el-input--label asterisk-right label"><label for="">Are there any special provisions
                            or instructions you wish to cover in your Will? If Yes – Please list</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_13"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Full name</label>
                                    </div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Relationship To
                                            You</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Full name">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_13[0][]"
                                                                                 id="ff_1_repeater_field_13_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_13_0_0"
                                                                                 data-error_index="repeater_field_13[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Relationship To You">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_13[0][]"
                                                                                 id="ff_1_repeater_field_13_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_13_1_0"
                                                                                 data-error_index="repeater_field_13[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ff-el-group" data-name="custom_html-5549076006301c876c2a312.52366436"><h2>7. Enduring Powers
                        of Attorney and Medical Decision Makers</h2></div>
                <div class="ff-el-group" data-name="custom_html-10189469866301c876c2a4f8.25561992"><p>An enduring power
                        of attorney is a legal document that lets you appoint someone to make decisions about personal
                        or financial matters. This person is called an attorney. The power endures - or continues - if
                        and when you are unable to make decisions.</p></div>
                <div data-type="repeater_field" data-name="repeater_field_16"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_16">
                    <div class="ff-el-input--label asterisk-right label"><label for="">Who do you want your attorney(s)
                            to be?</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_16"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Attorney's Full
                                            name</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Attorney's
                                            Address</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Attorney's Full name">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_16[0][]"
                                                                                 id="ff_1_repeater_field_16_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_16_0_0"
                                                                                 data-error_index="repeater_field_16[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Attorney's Address">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_16[0][]"
                                                                                 id="ff_1_repeater_field_16_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_16_1_0"
                                                                                 data-error_index="repeater_field_16[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_17"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_17">
                    <div class="ff-el-input--label asterisk-right label"><label for="">If naming more than one attorney,
                            how would you like them to make decisions? </label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_17"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Please
                                            Select</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Please Select">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><select type="select"
                                                                                  placeholder="Please Select"
                                                                                  name="repeater_field_17[0][]"
                                                                                  id="ff_1_repeater_field_17_0"
                                                                                  data-repeater_index="0"
                                                                                  data-type="repeater_item"
                                                                                  data-name="repeater_field_17_0_0"
                                                                                  data-error_index="repeater_field_17[0]"
                                                                                  data-calc_value="0"
                                                                                  class="ff-el-form-control">
                                                <option value="">Please Select</option>
                                                <option value="Jointly - the attorneys must all agree">Jointly - the
                                                    attorneys must all agree
                                                </option>
                                                <option
                                                    value="jointly - each alternative attorney must make decisions separately">
                                                    jointly - each alternative attorney must make decisions separately
                                                </option>
                                                <option
                                                    value="jointly and severally - attorneys can make decisions separately but if they make a joint decision, they must all agree  ">
                                                    jointly and severally - attorneys can make decisions separately but
                                                    if they make a joint decision, they must all agree
                                                </option>
                                            </select></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_18"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_18">
                    <div class="ff-el-input--label asterisk-right label"><label for="">Who do you want your alternative
                            attorney(s) to be?</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_18"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Alternative
                                            Attorney’s Full Name</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Alternative
                                            Attorney’s Address</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Alternative Attorney’s Full Name">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_18[0][]"
                                                                                 id="ff_1_repeater_field_18_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_18_0_0"
                                                                                 data-error_index="repeater_field_18[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Alternative Attorney’s Address">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_18[0][]"
                                                                                 id="ff_1_repeater_field_18_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_18_1_0"
                                                                                 data-error_index="repeater_field_18[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ff-el-group" data-name="custom_html-3672373316301c876c2b799.96314825"><p><strong>MEDICAL
                            DECISION MAKER </strong></p></div>
                <div data-type="repeater_field" data-name="repeater_field_19"
                     class="ff-el-group ff-el-repeater js-repeater" data-root_name="repeater_field_19">
                    <div class="ff-el-input--label asterisk-right label"><label for="">A person to make medical
                            decisions if you cannot give consent. Your medical decision maker is the first person on the
                            list who is reasonably available, and willing and able to make the decision</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_19"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">First Decision
                                            Maker</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Second Decision
                                            Maker</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Third Decision
                                            Maker</label></div>
                                </th>
                                <th>
                                    <div class="ff-el-input--label asterisk-right label"><label for="">Forth Decision
                                            Maker</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="First Decision Maker">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="1.	Full Name, DOB, Address, Mobile Number "
                                                                                 name="repeater_field_19[0][]"
                                                                                 id="ff_1_repeater_field_19_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_19_0_0"
                                                                                 data-error_index="repeater_field_19[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Second Decision Maker">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="1.	Full Name, DOB, Address, Mobile Number "
                                                                                 name="repeater_field_19[0][]"
                                                                                 id="ff_1_repeater_field_19_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_19_1_0"
                                                                                 data-error_index="repeater_field_19[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Third Decision Maker">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="1.	Full Name, DOB, Address, Mobile Number "
                                                                                 name="repeater_field_19[0][]"
                                                                                 id="ff_1_repeater_field_19_2"
                                                                                 data-repeater_index="2"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_19_2_0"
                                                                                 data-error_index="repeater_field_19[2]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Forth Decision Maker">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="1.	Full Name, DOB, Address, Mobile Number "
                                                                                 name="repeater_field_19[0][]"
                                                                                 id="ff_1_repeater_field_19_3"
                                                                                 data-repeater_index="3"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_19_3_0"
                                                                                 data-error_index="repeater_field_19[3]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td class="repeat_btn">
                                    <div class="ff-el-repeat-buttons-list js-repeat-buttons"><span
                                            class="repeat-plus ff-icon icon-plus-circle"></span><span
                                            class="repeat-minus ff-icon icon-minus-circle"></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ff-el-group" data-name="custom_html-10494129136301c876c2c493.14999626"><h2>8. Additional
                        notes</h2></div>
                <div class="ff-el-group ff-el-form-hide_label">
                    <div class="ff-el-input--label asterisk-right label"><label
                            for="ff_1_description_3">Textarea</label></div>
                    <div class="ff-el-input--content"><textarea name="description_3" id="ff_1_description_3"
                                                                class="ff-el-form-control" rows="9" cols="2"
                                                                data-name="description_3"></textarea></div>
                </div>
                <div class="ff-el-group label" data-name="custom_html-15082431026301c876c2c917.70705464"><h4
                        style="font-weight: 400;">Privacy Policy</h4>
                    <div class="ff-el-input--label asterisk-right label"><label for="">At Shelbourne Legal, we take
                            privacy and security of your personal information very seriously. &nbsp;Shelbourne Legal
                            will only use your personal information for the purpose for which you have provided it. We
                            will not disclose your personal information to third parties, unless you have consented to
                            such disclosure or in other circumstances where such disclosure is required or permitted by
                            law.</label></div>
                    <div class="ff-el-input--label asterisk-right label"><label for="">We endeavour to keep all personal
                            information safe by taking all reasonable precautions to protect personal information from
                            misuse, loss, unauthorised access, modification or disclosure.</label></div>
                </div>


                <?= $this->Form->create($client, ["method" => "post"]) ?>
                <div class="last">
                    <div id="form_recaptcha" class="g-recaptcha"
                         data-sitekey="<?= RECAPTCHAV2_SITEKEY ?>">
                    </div>
                    <?= $this->Flash->render() ?>


                    <div class="clearfix">
                        <a class="btn btn-outline-secondary mt-3 float-start" id="page4Prev">Previous</a>

                        <div class="float-none text-center mt-3 float-md-end mt-md-0">
                            <button type="submit" name="submit" id="submitIntakeform"
                                    class="btn btn-shelbourne rounded-pill fw-bold w-100 px-4 py-2">Submit
                            </button>
                        </div>
                    </div>

                </div>
                <?= $this->Form->end() ?>

            </div>


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


<script>

</script>
