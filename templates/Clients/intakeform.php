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
                            <div class="input">
                                <input type="text" name="full_name" class="input-control" placeholder="Ben " maxlength="20" required>
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label required">
                                <label>Last Name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="other_names" class="input-control" placeholder="Simons  " maxlength="20" required>
                            </div>
                        </div>
                    </div>
                    <div class="column-2 ff-t-cell">
                        <div class="ff-el-group">
                            <div class="label">
                                <label>Preferred Name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="other_names" class="input-control" placeholder="Preferred name "  maxlength="20">
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
                            <input type="text" name="date_birth" class="input-control" placeholder="01/01/1990 " required>
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Occupation</label>
                        </div>
                        <div class="input">
                            <input type="text" name="occupation" class="input-control" placeholder="Doctor " required>
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
                            <input type="text" name="address" class="input-control" placeholder="10 " required>
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Street Address</label>
                        </div>
                        <div class="input">
                            <input type="text" name="postal_address" class="input-control" placeholder="Monash St" required>
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>State</label>
                        </div>
                    </div>
                        <div class=input">
                            <select class="form-select" aria-label="Default select example">
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
                            <input type="text" name="postal_address" class="input-control" placeholder="3000" required>
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
                            <input type="text" name="email" class="input-control" placeholder="monash@gmail.com " required>
                        </div>
                    </div>
                </div>
                <div class="column-2 ff-t-cell">
                    <div class="ff-el-group">
                        <div class="label required">
                            <label>Phone number</label>
                        </div>
                        <div class="input">
                            <input type="text" name="phone" class="input-control" placeholder="0411222333" required>
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
                        <i class="fa-solid fa-circle-question"></i>
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
</script>
</div>
