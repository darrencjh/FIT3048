<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon', $this->Url->build('/logo.png',['fullBase'=>true]));?>
    <?= $this->Html->meta('csrfToken',$this->request->getAttribute('csrfToken')); ?>

    <!--#01ab9d-->
    <?= $this->Html->css(['normalize.min',  'bootstrap']) ?>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        #content {
            background: #ffffff;
            margin: 0;
            padding: 90px;
            color: #3a3a3a;
            margin-bottom: 40px;
        }

        .form-title {
            font-family: "Poppins", Sans-serif;
            font-weight: 300;
            line-height: 1.4em;
            font-size: 28px;
        }

        .ff-el-group {
            margin-bottom: 20px;
        }

        .ff-el-group {
            font-size: 15px;
        }

        #content h2,
        #content h4 {
            font-family: "Poppins", Sans-serif;
            font-weight: 300;
            line-height: 1.4em;
        }

        #content h2 {
            color: #ed6a5a;
            padding: 15px 0 10px;
            border-top: 1px solid;
        }

        #content h4 {
            color: #ed6a5a;
            padding: 15px 0 10px;
            border-top: 1px solid;
            margin: 0;
        }

        @media (min-width: 768px) {
            .ff-cell {
                display: table;
                width: 100%;
                table-layout: fixed;
                vertical-align: top;
            }

            .ff-t-cell:first-of-type {
                padding-left: 0;
            }

            .ff-t-cell:last-of-type {
                padding-right: 0;
            }

            .ff-t-cell {
                display: table-cell;
                padding: 0 15px;
                vertical-align: inherit;
                width: 100%;
            }
        }

        .ff-el-group .label {
            display: inline-block;
            margin-bottom: 5px;
            position: relative;
        }

        .ff-el-group .label label {
            font-weight: 600;
            font-size: 15px;
        }

        .ff-el-group .label label {
            color: #757575;
        }

        .ff-el-group .label label {
            margin-bottom: 0;
            display: inline-block;
            font-weight: 600;
            line-height: inherit;
        }

        .ff-el-group .label.required label:after {
            content: " *";
            color: #f56c6c;
            margin-left: 3px;
        }

        .ff-el-group .input input {
            background: #fff;
            color: #424344;
            border-radius: 5px;
            border: 1px solid #757575;
            padding: 10px;
        }

        .input-control {
            display: block;
            width: 100%;
            padding: 6px 12px;
            font-size: 16px;
            line-height: 1.5;
            color: #495057;
            background-image: none;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            margin-bottom: 0;
        }

        input[type=text],
        input[type=password],
        select,
        textarea {
            color: #666;
            padding: .75em;
            height: auto;
            border-width: 1px;
            border-style: solid;
            border-color: #eaeaea;
            border-radius: 2px;
            background: #fafafa;
            box-shadow: none;
            box-sizing: border-box;
            transition: all .2s linear;
        }

        input[type=text],
        input[type=password],
        textarea {
            color: #666;
            border: 1px solid #ccc;
            border-radius: 2px;
            -webkit-appearance: none;
        }

        .ff-el-group input[type=text]:focus,
        input[type=password]:focus {
            border-color: #80bdff;
            outline: 0;
        }

        .ff-el-group.ff-el-is-error .input-control {
            border-color: #f56c6c;
        }

        .ff-el-is-error .text-danger {
            font-size: 12px;
            margin-top: 4px;
        }

        .text-danger {
            color: #f56c6c;
        }

        .ff-btn-next:hover {
            background: #fff;
            color: #17BCB9;
            border-color: #17BCB9;
        }

        .ff-btn:hover {
            outline: 0;
            text-decoration: none;
            opacity: .8;
        }

        .ff-btn {
            background: #17BCB9;
            color: #fff;
            padding: 6px 20px;
            font-weight: 700;
            border-color: #17BCB9;
            border-width: 2px;
            border-radius: 50px;
        }

        .ff-float-right {
            float: right;
        }

        .ff-btn {
            display: inline-block;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 6px 12px;
            font-size: 16px;
            line-height: 1.5;
            position: relative;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .ff-el-form-check:not(.ff-el-image-holder) {
            width: auto!important;
            float: none!important;
            display: -moz-inline-stack;
            display: inline-block;
            position: relative;
            margin: 0 0 10px;
        }
        .ff-el-form-check:not(.ff-el-image-holder) label {
            margin: 0;
        }
        .ff-el-form-check label.ff-el-form-check-label {
            margin-bottom: 7px;
            cursor: pointer;
        }
        .ff-el-form-check-label {
            color: #424344;
        }
        .ff-el-form-check:not(.ff-el-image-holder) input {
            opacity: 0;
            outline: none;
            position: absolute;
            margin: 0;
            z-index: -1;
        }
        .ff-el-form-check:not(.ff-el-image-holder).ff_item_selected span {
            background-color: #17BCB9;
            border-color: #17BCB9;
            color:#ffffff;
        }
        .ff-el-form-check:not(.ff-el-image-holder) span:hover {
            color: #aaa;
        }
        .ff-el-form-check:not(.ff-el-image-holder):first-child span {
            border-left: 1px solid #dcdfe6;
            border-radius: 4px 0 0 4px;
            box-shadow: none!important;
        }
        .ff-el-form-check:not(.ff-el-image-holder) span {
            line-height: 1;
            font-weight: 500;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            background: #fff;
            border: 1px solid #dcdfe6;
            border-left: 0;
            color: #606266;
            -webkit-appearance: none;
            text-align: center;
            box-sizing: border-box;
            outline: none;
            margin: 0;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            padding: 12px 20px;
            font-size: 14px;
            border-radius: 0;
            position: relative;
            display: inline-block;
        }
    </style>

    <?= $this->Html->script('jquery-3.6.0.min') ?>

</head>


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
                        <div class="input">
                            <select name="postal_address" class="input-control">
							    <option>please select</option>
								<option>New South Wales</option>
								<option>Queensland</option>
                                <option>South Australia</option>
                                <option>Victoria</option>
                                <option>Western Australia</option>
                                <option>Tasmania</option>
							</select>
                        </div>
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
                <div class="dropdown">
<!--                    <select name="referred_by" class="input-control">-->
<!--					    <option>please select</option>-->
<!--						<option>Tom</option>-->
<!--						<option>Mary</option>-->
<!--						<option>Linda</option>-->
<!--						<option>Lucy</option>-->
<!--						<option>Apple</option>-->
<!--					</select>-->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <button class="dropdown-item" type="button">Tom</button>
                        <button class="dropdown-item" type="button">Mary</button>
                        <button class="dropdown-item" type="button">Linda</button>
                        <button class="dropdown-item" type="button">Lucy</button>
                    </div>
                </div>
            </div>
        <div class="ff-el-group">
            <h4>1.2 Existing Will &amp; Attorneys</h4>
            <p><span style="font-weight: 400;">Do you have an existing… &nbsp; </span></p>
        </div>
        <div class="ff-cell">
            <div class="column-1 ff-t-cell">
                <div class="ff-el-group">
                    <div class="label">
                        <label>Will</label>
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

<?= $this->Html->script('bootstrap.bundle.min'); ?>

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
