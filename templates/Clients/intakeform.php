<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


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
                            <div class="">
                                <input type="text" name="full_name" id="inputGivenName"  class="form-control" maxlength="20" required />
                                <div class="invalid-feedback">Please give your given name</div>

                            </div>

                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Last Name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="other_names" class="input-control" maxlength="20" required />
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label">
                                <label>Preferred Name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="other_names" class="input-control"  maxlength="20">
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
                            <input type="text" name="date_birth" class="input-control" placeholder="DD/MM/YYYY" required />
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Occupation</label>
                        </div>
                        <div class="input">
                            <input type="text" name="occupation" class="input-control" required />
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
                        <div class="input">
                            <input type="text" name="address" class="input-control" required />
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Street Address</label>
                        </div>
                        <div class="input">
                            <input type="text" name="postal_address" class="input-control" required />
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>State</label>
                        </div>
                            <select class="form-select" required>
                                <option selected>Choose:</option>
                                <option value="New South Wales">New South Wales</option>
                                <option value="Queensland">Queensland</option>
                                <option value="South Australia">South Australia</option>
                                <option value="Victoria">Victoria</option>
                                <option value="Western Australia">Western Australia</option>
                                <option value="Tasmania">Tasmania</option>
                            </select>
                        </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Post Code</label>
                        </div>
                        <div class="input">
                            <input type="text" name="postal_address" class="input-control" required />
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
                        <div class="input">
                            <input type="text" name="email" class="input-control" placeholder="example@email.com" required />
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Phone number</label>
                        </div>
                        <div class="input">
                            <input type="text" name="phone" class="input-control" required />
                        </div>
                    </div>
                </div>
            </div>

            <div class="ff-el-group">
                <div class="label">
                    <label>Referred by?</label>
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
                        <a class="d-inline-block" data-bs-toggle="tooltip" data-bs-original-title="A will is a legal document that spells out your wishes regarding the care of your children, as well as the distribution of your assets after your death." data-bs-placement="right">
                            <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="15px" width="15px">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                            </svg>
                        </a>
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
                        <a class="d-inline-block" data-bs-toggle="tooltip" data-bs-original-title="Refers to a legal authorization that gives a designated person the power to act for someone else. As such, a POA gives the agent or attorney the authority to act on behalf of the principal." data-bs-placement="right">
                            <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="15px" width="15px">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                            </svg>
                        </a>
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
                        <a class="d-inline-block" data-bs-toggle="tooltip" data-bs-original-title="This is a written direction from a member to their superannuation trustee setting out how they wish some or all of their superannuation death benefits to be distributed. The nomination is generally valid for a maximum of three years and lapses if it is not renewed." data-bs-placement="right">
                            <svg class="label" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="15px" width="15px">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"/>
                            </svg>
                        </a>
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
                                <span>Separated or Devoiced</span>
                            </label>
                        </div>
						<div class="ff-el-form-check">
                            <label class="ff-el-form-check-label">
                                <input type="radio" name="is_binding" class="ff-el-form-check-input ff-el-form-check-radio" value="0">
                                <span>never married or divorced</span>
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


        <div class="last">
            <div class="g-recaptcha"
                 data-sitekey="<?= RECAPTCHAV2_SITEKEY ?>">
            </div>
            <?php echo $this->Html->script('https://www.google.com/recaptcha/api.js"'); ?>
<!--            <button type="submit" name="submit" class="ff-float-right ff-btn ff-btn-next ff-btn-secondary">Submit</button>-->
            <div class="float-none text-center mt-3 float-md-end mt-md-0">
                <button type="submit" name="submit" id="submitIntakeform" class="btn btn-shelbourne rounded-pill fw-bold w-100">Submit</button>
            </div>
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

            //$.ajax({
            //    url:"/register",
            //    data:formData,
            //    type:"POST",
            //    beforeSend: function(xhr){
            //        xhr.setRequestHeader('X-CSRF-Token', <?//=json_encode($this->request->getCookie('csrfToken'));?>//);
            //    },
            //    success:function(res){
            //        alert(res);
            //    }
            //});
        }
    }


    $("#submitIntakeform").click(function(){
        let givenName=inputGivenName.value
        if(givenName=="") $("#inputGivenName").addClass("is-invalid")

    })



</script>
