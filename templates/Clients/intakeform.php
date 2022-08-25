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
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 25%;"
                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                    </div>
                </div>

                <!--    --><? //= $this->Form->create($client, ["method" => "post"]) ?>
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
                            <div class="">
                                <input type="text" name="givenName" id="inputGivenName" class="form-control"
                                       maxlength="20"
                                       required/>
                                <div class="invalid-feedback">Please provide your given name</div>

                            </div>

                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Last Name</label>
                            </div>
                            <div class="">
                                <input id="inputLastName" type="text" name="lastName" class="form-control"
                                       maxlength="20"
                                       required/>
                                <div class="invalid-feedback">Please provide your last name</div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label">
                                <label>Preferred Name</label>
                            </div>
                            <div class="">
                                <input type="text" name="preferred_name" class="form-control" maxlength="20">
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
                                <input type="text" id="inputDOB" name="date_birth" class="form-control"
                                       placeholder="DD/MM/YYYY" required/>
                                <div class="invalid-feedback">Please provide your date of birth</div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Occupation</label>
                            </div>
                            <div class="">
                                <input type="text" id="inputOccupation" name="occupation" class="form-control"
                                       required/>
                                <div class="invalid-feedback">Please provide your occupation</div>
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
                            <div class="">
                                <input id="inputHouseNumber" type="text" name="address" class="input-control" required/>
                                <div class="invalid-feedback">Please provide your unit/house number</div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Street Address</label>
                            </div>
                            <div class="">
                                <input id="inputAddress" type="text" name="postal_address" class="input-control"
                                       required/>
                                <div class="invalid-feedback">Please provide your street address</div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>State</label>
                            </div>
                            <select class="form-select" id="inputState" name="state" required>
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
                            <div class="">
                                <input type="text" name="postCode" id="inputPostCode" class="input-control" required/>
                                <div class="invalid-feedback">Please provide your post code</div>
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
                            <div class="">
                                <input type="text" id="inputEmail" name="email" class="input-control"
                                       placeholder="example@email.com" required/>
                                <div class="invalid-feedback">Please provide your email</div>
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Phone number</label>
                            </div>
                            <div class="">
                                <input id="inputPhoneNumber" type="text" name="phone" class="input-control" required/>
                                <div class="invalid-feedback">Please provide your phone number</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ff-el-group">
                    <div class="label">
                        <label>Referred by?</label>
                        <select class="form-select" id="referral">
                            <option selected>Choose: (optional)</option>
                            <option value="Tom">Tom</option>
                            <option value="Mary">Mary</option>
                            <option value="Linda">Linda</option>
                            <option value="Lucy">Lucy</option>
                        </select>
                    </div>
                </div>


                <div class="text-end">
                    <a class="btn btn-shelbourne mt-3 rounded-pill px-4 py-2" id="page1Next">Next</a>
                </div>
            </div>


            <!-- Page 2           -->
            <div id="page2" class="collapse text-grey">
                <!--    Progress bar         -->
                <div class="mt-3">Step 2 of 4 - Step 2</div>
                <div class="progress my-2">
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 50%;"
                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                    </div>
                </div>

                <!--   1.2 Existing documents -->

                <div class="ff-el-group">
                    <h4>1.2 Existing Documents</h4>
                    <p>
                        <span class="text-muted">Do you have any existing… &nbsp; </span>
                    </p>
                </div>

                <!--                Identification  -->
                <div class="row g-0 mb-4">
                    <div class="col-12 col-md-5">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Proof of Identification</label>
                            </div>
                            <select class="form-select" id="inputProofId" name="proof_id" required>
                                <option selected class="text-muted">Choose your id type</option>
                                <option value="password">Password</option>
                                <option value="driver licence">Driver's Licence</option>
                                <option value="medical card">Medical Card</option>
                                <option value="Age card">Age Card</option>
                            </select>

                        </div>
                    </div>
                </div>


                <!--                Will -->
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


                            <!--                            <div class="input" style="font-size: 0;">-->
                            <!--                                <div class="ff-el-form-check">-->
                            <!--                                    <label class="ff-el-form-check-label">-->
                            <!--                                        <input type="radio" name="has_will"-->
                            <!--                                               class="ff-el-form-check-input ff-el-form-check-radio" value="1">-->
                            <!--                                        <span>Yes</span>-->
                            <!--                                    </label>-->
                            <!--                                </div>-->
                            <!--                                <div class="ff-el-form-check">-->
                            <!--                                    <label class="ff-el-form-check-label">-->
                            <!--                                        <input type="radio" name="has_will"-->
                            <!--                                               class="ff-el-form-check-input ff-el-form-check-radio" value="0">-->
                            <!--                                        <span>No</span>-->
                            <!--                                    </label>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        </div>
                    </div>
                    <!--                    <div class="column-2 ff-t-cell" style="display:none">-->
                    <!--                        <div class="ff-el-group">-->
                    <!--                            <div class="label">-->
                    <!--                                <label>Last Reviewed…</label>-->
                    <!--                            </div>-->
                    <!--                            <div class="input">-->
                    <!--                                <input type="text" name="will_text" class="input-control"-->
                    <!--                                       placeholder="  Last Reviewed…">-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>

                <!--                Powers of Attorney -->
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

                <!--                Binding Death Benefit Nominations-->
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

                <!--                has decision maker-->
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

                <!--                has_superannu_deed-->
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


                <!--                has_family_deed-->
                <div class="mb-4">
                    <div>
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

                <div class="text-info">Please bring/email your existing docs before your first appointment.</div>
                <div class="text-muted mb-4">Our Email:admin@shelbournelegal.com.au</div>

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
                        <div class="fw-bold">Please describe</div>
                        <div>
                            <textarea name="health_desc" id="health_textarea" class="my-textarea" rows="3" cols="2"
                                      data-name="description" style="height: 92px; "></textarea>
                        </div>
                    </div>
                </div>

                <!--             1.4 add family div  -->
                <div class="ff-el-group">
                    <h2>Your Family</h2>
                </div>
                <div class="mb-4">
                    <div>
                        <div class="ff-el-group">
                            <div class="label">
                                <label>What is your relationship status</label>
                            </div>

                            <!--    4 choices      -->
                            <div class="relationStatus d-flex">
                                <div class="statusArea">
                                    <label class="statusLabel">
                                        <input type="radio" name="relationship_status"
                                               class="" value="married">
                                        <span class="oneStatus" id="firstStatus">Married</span>
                                    </label>
                                </div>
                                <div class="statusArea">
                                    <label class="statusLabel">
                                        <input type="radio" name="relationship_status"
                                               class="" value="de-facto">
                                        <span class="oneStatus">De-facto</span>
                                    </label>
                                </div>
                                <div class="statusArea">
                                    <label class="statusLabel">
                                        <input type="radio" name="relationship_status"
                                               class="" value="separated or divorced">
                                        <span class="oneStatus">Separated or Divorced</span>
                                    </label>
                                </div>
                                <div class="statusArea">
                                    <label class="statusLabel">
                                        <input type="radio" name="relationship_status"
                                               class="" value="never married or divorced">
                                        <span class="oneStatus" id="lastStatus">never married or Divorced</span>
                                    </label>
                                </div>
                            </div>

                            <!--                            Married-->
                            <div class="collapse relationFields" id="marriedField">

                            </div>
                            <!--                            de-facto-->
                            <div class="collapse relationFields" id="deFactoField">I am de</div>

                            <!--                            Separated or Divorced-->
                            <div class="collapse relationFields" id="sepField">I am divorced</div>

                            <!--                            never married or Divorced-->
                            <div class="collapse relationFields" id="neverField">I am never</div>

                        </div>
                    </div>
                </div>

                <!--           1.5  Children  -->
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
                                        <input type="radio" name="current_children"
                                               class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                        <span>Yes</span>
                                    </label>
                                </div>
                                <div class="ff-el-form-check">
                                    <label class="ff-el-form-check-label">
                                        <input type="radio" name="current_children"
                                               class="ff-el-form-check-input ff-el-form-check-radio" value="0">
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
                                        <input type="radio" name="previous_children"
                                               class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                        <span>Yes</span>
                                    </label>
                                </div>
                                <div class="ff-el-form-check">
                                    <label class="ff-el-form-check-label">
                                        <input type="radio" name="previous_children"
                                               class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                        <span>No</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--          1.6 add household div  -->
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
                                        <input type="radio" name="is_living"
                                               class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                        <span>Yes</span>
                                    </label>
                                </div>
                                <div class="ff-el-form-check">
                                    <label class="ff-el-form-check-label">
                                        <input type="radio" name="is_living"
                                               class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                        <span>No</span>
                                    </label>
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
                <div class="ff-cell">
                    <div class="column-1 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label">
                                <label>Is there anyone else financially dependent on you?</label>
                            </div>
                            <div class="input" style="font-size: 0;">
                                <div class="ff-el-form-check">
                                    <label class="ff-el-form-check-label">
                                        <input type="radio" name="is_dependent"
                                               class="ff-el-form-check-input ff-el-form-check-radio" value="1">
                                        <span>Yes</span>
                                    </label>
                                </div>
                                <div class="ff-el-form-check">
                                    <label class="ff-el-form-check-label">
                                        <input type="radio" name="is_dependent"
                                               class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                        <span>No</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix">
                    <a class="btn btn-outline-secondary mt-3 float-start" id="page2Prev">Previous</a>
                    <a class="btn btn-shelbourne mt-3 rounded-pill px-4 py-2 float-end" id="page2Next">Next</a>
                </div>
            </div>


            <!-- Page 3           -->
            <div id="page3" class="collapse">
                <div class="text-muted mt-3">Step 3 of 4 - Step 3</div>
                <div class="progress my-2">
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 75%;"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%
                    </div>
                </div>

                <!--          2  -->
                <div class="ff-el-group">
                    <h2>2. Assets & Liabilities</h2>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_3"
                     class="ff-el-group ff-el-repeater js-repeater"
                     data-root_name="repeater_field_3">
                    <div class="ff-el-input--label asterisk-right"><label for="">Real estate</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_3"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="label"><label for="">Address of the property: </label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Registered owner(s):</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Type of ownership:</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Location of title:</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Mortgage:</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Property value:</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Address of the property: ">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_3[0][]"
                                                                                 id="ff_1_repeater_field_3_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_3_0_0"
                                                                                 data-error_index="repeater_field_3[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Registered owner(s):">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_3[0][]"
                                                                                 id="ff_1_repeater_field_3_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_3_1_0"
                                                                                 data-error_index="repeater_field_3[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Type of ownership:">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><select type="select" placeholder="Select"
                                                                                  name="repeater_field_3[0][]"
                                                                                  id="ff_1_repeater_field_3_2"
                                                                                  data-repeater_index="2"
                                                                                  data-type="repeater_item"
                                                                                  data-name="repeater_field_3_2_0"
                                                                                  data-error_index="repeater_field_3[2]"
                                                                                  data-calc_value="0"
                                                                                  class="ff-el-form-control">
                                                <option value="">Select</option>
                                                <option value="Sole">Sole</option>
                                                <option value="Joint">Joint</option>
                                                <option value="Tenants in Common">Tenants in Common</option>
                                                <option value="Unsure">Unsure</option>
                                            </select></div>
                                    </div>
                                </td>
                                <td data-label="Location of title:">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_3[0][]"
                                                                                 id="ff_1_repeater_field_3_3"
                                                                                 data-repeater_index="3"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_3_3_0"
                                                                                 data-error_index="repeater_field_3[3]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Mortgage:">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><select type="select" placeholder="Select"
                                                                                  name="repeater_field_3[0][]"
                                                                                  id="ff_1_repeater_field_3_4"
                                                                                  data-repeater_index="4"
                                                                                  data-type="repeater_item"
                                                                                  data-name="repeater_field_3_4_0"
                                                                                  data-error_index="repeater_field_3[4]"
                                                                                  data-calc_value="0"
                                                                                  class="ff-el-form-control">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select></div>
                                    </div>
                                </td>
                                <td data-label="Property value:">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 placeholder="Property value:"
                                                                                 name="repeater_field_3[0][]"
                                                                                 id="ff_1_repeater_field_3_5"
                                                                                 data-repeater_index="5"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_3_5_0"
                                                                                 data-error_index="repeater_field_3[5]"
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
                <div data-type="repeater_field" data-name="repeater_field_5"
                     class="ff-el-group ff-el-repeater js-repeater"
                     data-root_name="repeater_field_5">
                    <div class="ff-el-input--label asterisk-right"><label for="">Bank Accounts</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_5"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="label"><label for=""> Bank or Financial Institution: </label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Account holder(s):</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Account type:</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Approximate value:</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label=" Bank or Financial Institution: ">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_5[0][]"
                                                                                 id="ff_1_repeater_field_5_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_5_0_0"
                                                                                 data-error_index="repeater_field_5[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Account holder(s):">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_5[0][]"
                                                                                 id="ff_1_repeater_field_5_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_5_1_0"
                                                                                 data-error_index="repeater_field_5[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Account type:">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_5[0][]"
                                                                                 id="ff_1_repeater_field_5_2"
                                                                                 data-repeater_index="2"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_5_2_0"
                                                                                 data-error_index="repeater_field_5[2]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Approximate value:">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_5[0][]"
                                                                                 id="ff_1_repeater_field_5_3"
                                                                                 data-repeater_index="3"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_5_3_0"
                                                                                 data-error_index="repeater_field_5[3]"
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

                <div data-type="repeater_field" data-name="repeater_field_6"
                     class="ff-el-group ff-el-repeater js-repeater"
                     data-root_name="repeater_field_6">
                    <div class="ff-el-input--label asterisk-right"><label for="">Motor vehicles</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_6"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="label"><label for="">Make</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Model</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Year</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Make">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_6[0][]"
                                                                                 id="ff_1_repeater_field_6_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_6_0_0"
                                                                                 data-error_index="repeater_field_6[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Model">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_6[0][]"
                                                                                 id="ff_1_repeater_field_6_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_6_1_0"
                                                                                 data-error_index="repeater_field_6[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Year">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_6[0][]"
                                                                                 id="ff_1_repeater_field_6_2"
                                                                                 data-repeater_index="2"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_6_2_0"
                                                                                 data-error_index="repeater_field_6[2]"
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
                <div data-type="repeater_field" data-name="repeater_field_7"
                     class="ff-el-group ff-el-repeater js-repeater"
                     data-root_name="repeater_field_7">
                    <div class="ff-el-input--label asterisk-right"><label for="">Investments </label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_7"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="label"><label for="">Type of investment: </label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Held with:</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Approximate value:</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Type of investment: ">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_7[0][]"
                                                                                 id="ff_1_repeater_field_7_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_7_0_0"
                                                                                 data-error_index="repeater_field_7[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Held with:">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_7[0][]"
                                                                                 id="ff_1_repeater_field_7_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_7_1_0"
                                                                                 data-error_index="repeater_field_7[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Approximate value:">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_7[0][]"
                                                                                 id="ff_1_repeater_field_7_2"
                                                                                 data-repeater_index="2"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_7_2_0"
                                                                                 data-error_index="repeater_field_7[2]"
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

                <!--             add Loans and debts div  -->
                <div class="ff-el-group">
                    <h4>Loans and debts</h4>
                </div>
                <div class="ff-el-group">
                    <div class="ff-el-input--label asterisk-right label"><label for="ff_1_description_1">Details of
                            money
                            you owe:</label></div>
                    <div class="ff-el-input--content"><textarea name="description_1" id="ff_1_description_1"
                                                                class="ff-el-form-control" rows="3" cols="2"
                                                                data-name="description_1"></textarea></div>
                </div>
                <div class="ff-el-group ff-el-form-left  ff_list_buttons">
                    <div class="ff-el-input--label asterisk-right label"><label>Is there a loan agreement?</label></div>
                    <div class="ff-el-input--content">
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_11_c082e43255c5b0d25a9ca2affbf228d7"><input
                                    type="radio" name="input_radio_11" data-name="input_radio_11"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                    id="input_radio_11_c082e43255c5b0d25a9ca2affbf228d7"> <span>Yes</span></label></div>
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_11_5525751c4b5b5dc676eb2c35803dec90"><input
                                    type="radio" name="input_radio_11" data-name="input_radio_11"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                    id="input_radio_11_5525751c4b5b5dc676eb2c35803dec90"> <span>No</span></label></div>
                    </div>
                </div>
                <div class="ff-el-group">
                    <div class="ff-el-input--label asterisk-right label"><label for="ff_1_description_2">Details of
                            money
                            owed to you:</label></div>
                    <div class="ff-el-input--content"><textarea name="description_2" id="ff_1_description_2"
                                                                class="ff-el-form-control" rows="3" cols="2"
                                                                data-name="description_2"></textarea></div>
                </div>
                <div class="ff-el-group ff-el-form-left  ff_list_buttons">
                    <div class="ff-el-input--label asterisk-right  label"><label>Is there a loan agreement?</label>
                    </div>
                    <div class="ff-el-input--content">
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_12_3f734e96b7d0a8c8988a86372d918073"><input
                                    type="radio" name="input_radio_12" data-name="input_radio_12"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                    id="input_radio_12_3f734e96b7d0a8c8988a86372d918073"> <span>Yes</span></label></div>
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_12_4836f19b5cfa63f47adaf07a20cb7940"><input
                                    type="radio" name="input_radio_12" data-name="input_radio_12"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                    id="input_radio_12_4836f19b5cfa63f47adaf07a20cb7940"> <span>No</span></label></div>
                    </div>
                </div>
                <div class="ff-el-group ff-el-form-left  ff_list_buttons">
                    <div class="ff-el-input--label asterisk-right label"><label>Repayment to estate?</label></div>
                    <div class="ff-el-input--content">
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_13_a6362cf826d65c90d875af5ac7b28b34"><input
                                    type="radio" name="input_radio_13" data-name="input_radio_13"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="To be repaid"
                                    id="input_radio_13_a6362cf826d65c90d875af5ac7b28b34">
                                <span>To be repaid</span></label>
                        </div>
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_13_27e7d76c9835a53eb3787ac6e2917b51"><input
                                    type="radio" name="input_radio_13" data-name="input_radio_13"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="To be forgiven"
                                    id="input_radio_13_27e7d76c9835a53eb3787ac6e2917b51">
                                <span>To be forgiven</span></label></div>
                    </div>
                </div>

                <!--             add Insurance div  -->
                <div class="ff-el-group">
                    <h4>Insurance</h4>

                </div>
                <div data-name="ff_cn_id_12" class="ff-t-container ff-column-container ff_columns_total_2  ">
                    <div class="ff-t-cell ff-t-column-1">
                        <div class="ff-el-group  ff_list_buttons">
                            <div class="ff-el-input--label asterisk-right label"><label>House and Contents:</label>
                            </div>
                            <div class="ff-el-input--content">
                                <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                                       for="input_radio_14_a60d602f31d5494100fe8f14302398a4"><input
                                            type="radio" name="input_radio_14" data-name="input_radio_14"
                                            class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                            id="input_radio_14_a60d602f31d5494100fe8f14302398a4">
                                        <span>Yes</span></label>
                                </div>
                                <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                                       for="input_radio_14_bbeabdc084584ec1b0a1be4c1885dc67"><input
                                            type="radio" name="input_radio_14" data-name="input_radio_14"
                                            class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                            id="input_radio_14_bbeabdc084584ec1b0a1be4c1885dc67">
                                        <span>No</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ff-t-cell ff-t-column-2">
                        <div class="ff-el-group has-conditions ff_excluded" style="">
                            <div class="ff-el-input--label asterisk-right label"><label
                                    for="ff_1_input_text_17">Company</label></div>
                            <div class="ff-el-input--content"><input type="text" name="input_text_17"
                                                                     class="ff-el-form-control"
                                                                     data-name="input_text_17"
                                                                     id="ff_1_input_text_17"></div>
                        </div>
                    </div>
                </div>
                <div data-name="ff_cn_id_13" class="ff-t-container ff-column-container ff_columns_total_2  ">
                    <div class="ff-t-cell ff-t-column-1">
                        <div class="ff-el-group  ff_list_buttons">
                            <div class="ff-el-input--label asterisk-right label"><label>Vehicle insurance</label></div>
                            <div class="ff-el-input--content">
                                <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                                       for="input_radio_15_50118c60793610c400d483077813e8ac"><input
                                            type="radio" name="input_radio_15" data-name="input_radio_15"
                                            class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                            id="input_radio_15_50118c60793610c400d483077813e8ac">
                                        <span>Yes</span></label>
                                </div>
                                <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                                       for="input_radio_15_659c65b84476f8da0de01141dbab2287"><input
                                            type="radio" name="input_radio_15" data-name="input_radio_15"
                                            class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                            id="input_radio_15_659c65b84476f8da0de01141dbab2287">
                                        <span>No</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ff-t-cell ff-t-column-2">
                        <div class="ff-el-group has-conditions ff_excluded" style="">
                            <div class="ff-el-input--label asterisk-right"><label
                                    for="ff_1_input_text_18">Company</label>
                            </div>
                            <div class="ff-el-input--content"><input type="text" name="input_text_18"
                                                                     class="ff-el-form-control"
                                                                     data-name="input_text_18"
                                                                     id="ff_1_input_text_18"></div>
                        </div>
                    </div>
                </div>
                <div data-name="ff_cn_id_15" class="ff-t-container ff-column-container ff_columns_total_2  ">
                    <div class="ff-t-cell ff-t-column-1">
                        <div class="ff-el-group  ff_list_buttons">
                            <div class="ff-el-input--label asterisk-right label"><label>Life insurance</label></div>
                            <div class="ff-el-input--content">
                                <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                                       for="input_radio_17_228215417ba55e26dc7c20a17f56531a"><input
                                            type="radio" name="input_radio_17" data-name="input_radio_17"
                                            class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                            id="input_radio_17_228215417ba55e26dc7c20a17f56531a">
                                        <span>Yes</span></label>
                                </div>
                                <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                                       for="input_radio_17_fc4fb385c654d7b85ce00419c52ae637"><input
                                            type="radio" name="input_radio_17" data-name="input_radio_17"
                                            class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                            id="input_radio_17_fc4fb385c654d7b85ce00419c52ae637">
                                        <span>No</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ff-t-cell ff-t-column-2">
                        <div class="ff-el-group has-conditions ff_excluded" style="">
                            <div class="ff-el-input--label asterisk-right"><label
                                    for="ff_1_input_text_20">Company</label>
                            </div>
                            <div class="ff-el-input--content"><input type="text" name="input_text_20"
                                                                     class="ff-el-form-control"
                                                                     data-name="input_text_20"
                                                                     id="ff_1_input_text_20"></div>
                        </div>
                    </div>
                </div>
                <div data-type="repeater_field" data-name="repeater_field_8"
                     class="ff-el-group ff-el-repeater js-repeater"
                     data-root_name="repeater_field_8">
                    <div class="ff-el-input--label asterisk-right label"><label for="">Superannuation</label></div>
                    <div class="ff-el-input--content">
                        <table data-max_repeat="" data-root_name="repeater_field_8"
                               class="ff_repeater_table ff_flexible_table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="label"><label for="">Fund</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Value</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Current Nomination</label></div>
                                </th>
                                <th>
                                    <div class="label"><label for="">Binding</label></div>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Fund">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_8[0][]"
                                                                                 id="ff_1_repeater_field_8_0"
                                                                                 data-repeater_index="0"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_8_0_0"
                                                                                 data-error_index="repeater_field_8[0]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Value">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_8[0][]"
                                                                                 id="ff_1_repeater_field_8_1"
                                                                                 data-repeater_index="1"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_8_1_0"
                                                                                 data-error_index="repeater_field_8[1]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Current Nomination">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><input type="text"
                                                                                 name="repeater_field_8[0][]"
                                                                                 id="ff_1_repeater_field_8_2"
                                                                                 data-repeater_index="2"
                                                                                 data-type="repeater_item"
                                                                                 data-name="repeater_field_8_2_0"
                                                                                 data-error_index="repeater_field_8[2]"
                                                                                 class="ff-el-form-control"></div>
                                    </div>
                                </td>
                                <td data-label="Binding">
                                    <div class="ff-el-group">
                                        <div class="ff-el-input--content"><select type="select" placeholder="Select"
                                                                                  name="repeater_field_8[0][]"
                                                                                  id="ff_1_repeater_field_8_3"
                                                                                  data-repeater_index="3"
                                                                                  data-type="repeater_item"
                                                                                  data-name="repeater_field_8_3_0"
                                                                                  data-error_index="repeater_field_8[3]"
                                                                                  data-calc_value="0"
                                                                                  class="ff-el-form-control">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="Unsure">Unsure</option>
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

                <!--             add Businesses div  -->
                <div class="ff-el-group">
                    <h4>Businesses</h4>
                </div>
                <div class="ff-el-group  ff_list_buttons">
                    <div class="ff-el-input--label asterisk-right label"><label>Are you an office holder of any private
                            companies? </label></div>
                    <div class="ff-el-input--content">
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_18_32c918cd96c6a796ff1bdcb3de606878"><input
                                    type="radio" name="input_radio_18" data-name="input_radio_18"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                    id="input_radio_18_32c918cd96c6a796ff1bdcb3de606878"> <span>Yes</span></label></div>
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_18_d8159324612e5947174ec2f10383362e"><input
                                    type="radio" name="input_radio_18" data-name="input_radio_18"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                    id="input_radio_18_d8159324612e5947174ec2f10383362e"> <span>No</span></label></div>
                    </div>
                </div>
                <div class="ff-el-group  ff_list_buttons">
                    <div class="ff-el-input--label asterisk-right label"><label>Are you the beneficiary/ trustee of any
                            trusts?</label></div>
                    <div class="ff-el-input--content">
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_19_907fa15e3fed7acb76547720c4240f80"><input
                                    type="radio" name="input_radio_19" data-name="input_radio_19"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                    id="input_radio_19_907fa15e3fed7acb76547720c4240f80"> <span>Yes</span></label></div>
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_19_518a85482b65997d0df80b00629eb4bc"><input
                                    type="radio" name="input_radio_19" data-name="input_radio_19"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                    id="input_radio_19_518a85482b65997d0df80b00629eb4bc"> <span>No</span></label></div>
                    </div>
                </div>
                <div class="ff-el-group  ff_list_buttons">
                    <div class="ff-el-input--label asterisk-right label"><label>Are you in a partnership?</label></div>
                    <div class="ff-el-input--content">
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_20_84ec688ac17e1b71128f23d55ab44ad9"><input
                                    type="radio" name="input_radio_20" data-name="input_radio_20"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="yes"
                                    id="input_radio_20_84ec688ac17e1b71128f23d55ab44ad9"> <span>Yes</span></label></div>
                        <div class="ff-el-form-check ff-el-form-check-"><label class="ff-el-form-check-label"
                                                                               for="input_radio_20_f29fd0dd59ce928d24db64ef4e3eef11"><input
                                    type="radio" name="input_radio_20" data-name="input_radio_20"
                                    class="ff-el-form-check-input ff-el-form-check-radio" value="no"
                                    id="input_radio_20_f29fd0dd59ce928d24db64ef4e3eef11"> <span>No</span></label></div>
                    </div>
                </div>


                <div class="clearfix">
                    <a class="btn btn-outline-secondary mt-3 float-start" id="page3Prev">Previous</a>
                    <a class="btn btn-shelbourne mt-3 rounded-pill px-4 py-2 float-end" id="page3Next">Next</a>
                </div>

            </div>


            <!--  Page 4        -->
            <div id="page4" class="collapse">
                <div class="text-muted mt-3">Step 4 of 4 - Step 4</div>
                <div class="progress my-2">
                    <div class="progress-bar bg-shelbourne text-end p-2" role="progressbar" style="width: 100%;"
                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%
                    </div>
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

