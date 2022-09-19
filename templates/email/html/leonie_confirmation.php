<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$content = explode("\n", $content);
$body = '';

foreach ($content as $line) :
    $body .= '<p> ' . h($line) . "</p>\n";
endforeach;
?>

<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        .associated-table th,.associated-table td{
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        .associated-table tr:nth-child(even) {/*第二行开始 */
            background-color: #dddddd;
        }
        .associated-table tr:hover{
            background-color:#ccc;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: left;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #01ab9d;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        h2{
            margin-bottom: 20px;
        }

        .text-shelbourne{
            color: #01ab9d;
        }

        .btn{
            width: 40%;
            background-color: #01ab9d;
            border: solid 1px #01ab9d;
            border-radius: 5px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
            margin-bottom: 20px;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize !important;
        }
        .btn-shelbourne {
            color: #fff !important;
            background-color: #01ab9d;
            border-color: #01ab9d;
        }
        .btn-shelbourne:hover {
            color: #01ab9d !important;
            background-color: #fff;
            border-color: #01ab9d;
        }
        .btn-check:focus + .btn-shelbourne, .btn-shelbourne:focus {
            color: #fff;
            background-color: #01ab9d;
            border-color: #01ab9d;
            box-shadow: 0 0 0 0.25rem rgba(23,188,185,0.5);
        }
        .btn-check:checked + .btn-shelbourne, .btn-check:active + .btn-shelbourne, .btn-shelbourne:active, .btn-shelbourne.active, .show > .btn-shelbourne.dropdown-toggle {
            color: #fff;
            background-color: #01ab9d;
            border-color: #01ab9d;
        }
        .btn-check:checked + .btn-shelbourne:focus, .btn-check:active + .btn-shelbourne:focus, .btn-shelbourne:active:focus, .btn-shelbourne.active:focus, .show > .btn-shelbourne.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(23,188,185,0.5);
        }
        .btn-shelbourne:disabled, .btn-shelbourne.disabled {
            color: #fff;
            background-color: #01ab9d;
            border-color: #01ab9d;
        }

        .btn-shelbourne table td {
            background-color: #01ab9d;
        }

        a.btn-shelbourne  {
            background-color: #01ab9d;
            border-color: #01ab9d;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important;
            }

            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }

            table[class=body] .content {
                padding: 0 !important;
            }

            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table[class=body] .btn table {
                width: 100% !important;
            }

            table[class=body] .btn a {
                width: 100% !important;
            }

            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

        .text-center{
            text-align: center;
        }
        h2{
            margin-top: 24px;
        }

        .emailformat{
            color: #ccc;
            margin-top: 10px;
        }

        .list-group-numbered {
            list-style-type: none;
            counter-reset: section;
        }
        .list-group-numbered > li::before {
            content: counters(section, ".") ". ";
            counter-increment: section;
        }

    </style>
</head>
<body class="">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <div class="text-center">
                                            <img src="https://d3v0px0pttie1i.cloudfront.net/uploads/user/logo/6737024/445e6b00.jpg" alt="Shelbourne legal">
                                        </div>
                                        <p><?= h($client['full_name'] . "has successfully completed the intake form") ?></p>
                                        <p>His/Her details are as follows:</p>
                                        <h2>1 - Basic Information</h2>
                                        <h3>1.1 Your Details</h3>
                                        <p><b>Full Name:</b> <?= h($client['full_name']) ?></p>
                                        <p><b>Previous Name:</b> <?= h($client['previous_name']) ?></p>
                                        <p><b>Date of birth:</b> <?= h($client['date_of_birth']) ?></p>
                                        <p><b>Occupation:</b> <?= h($client['occupation']) ?></p>
                                        <p><b>Address:</b> <?= h($client['home_address']) ?></p>
                                        <p><b>Postal address:</b> <?= h($client['postal_address']) ?></p>
                                        <p><b>Email address:</b> <?= h($client['email']) ?></p>
                                        <p><b>Phone number:</b> <?= h($client['phone']) ?></p>

                                        <h3>1.2 Existing Documents</h3>
                                        <p>Has will: <?= $client['has_will'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Has powers of attorney: <?= $client['has_power'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Has binding death benefit
                                            nominations: <?= $client['has_binding'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Has existing medical treatment decision
                                            maker: <?= $client['has_decision_maker'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Has self-managed superannuation trust
                                            deed: <?= $client['has_superannu_deed'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Has family trust
                                            deed: <?= $client['has_family_deed'] == 1 ? "Yes" : "No" ?></p>
                                        <h4>Businesses</h4>
                                        <p>Are you an office holder of any private
                                            companies? <?= $client['is_office_holder'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Are you the beneficiary/trustee of any
                                            trusts? <?= $client['is_beneficiary'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Are you in a
                                            partnership? <?= $client['in_partnership'] == 1 ? "Yes" : "No" ?></p>

                                        <h3>1.3 Health concerns</h3>
                                        <p>Do you have any brain-related disorders; memory loss or confusion; or take any medication that could impact on cognitive function? <?= $client['is_health'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Description: <?= h($client['health_desc']) ?></p>

                                        <h3>Your Family</h3>
                                        <p>Relationship status: <?= h($client['relationship_status']) ?></p>
                                        <p>Relationship description:</p>
                                        <?php if($client['relationship_status']=="married"){ ?>
                                            <p>Partner's full name: <?= h($client['married_fullName']) ?></p>
                                            <p>Partner's DOB: <?= h($client['married_dob']) ?></p>
                                            <p>Partner's mobile number: <?= h($client['married_phone']) ?></p>
                                        <?php }else if($client['relationship_status']=="de-facto"){ ?>
                                            <p>Partner's full name: <?= h($client['defacto_fullName']) ?></p>
                                            <p>Started living together: <?= h($client['defacto_living']) ?></p>
                                            <p>Contemplating marriage: <?= $client['defacto_marriage'] == 1 ? "Yes" : "No" ?></p>
                                        <?php }else if($client['relationship_status']=="separated or divorced"){ ?>
                                            <p>Has a property settlement occurred? <?= $client['sepdiv_property_settlement'] == 1 ? "Yes" : "No" ?></p>
                                        <?php } ?>

                                        <p>Have children from the current
                                            relationships: <?= $client['has_child_current'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Have children from the previous
                                            relationships: <?= $client['has_child_prev'] == 1 ? "Yes" : "No" ?></p>

                                        <!--                                        Children-->
                                        <?php if (!empty($client->children)) : ?>
                                            <h4><?= __('Your Children') ?></h4>
                                            <div class="associated-table">
                                                <table>
                                                    <tr>
                                                        <th><?= __('Name') ?></th>
                                                        <th><?= __('Age') ?></th>
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

                                        <!--                                        Grandchildren-->
                                        <?php if (!empty($client->grandchildren)) : ?>
                                            <h4><?= __('Your Grandchildren') ?></h4>
                                            <div class="associated-table">
                                                <table>
                                                    <tr>
                                                        <th><?= __('Full Name') ?></th>
                                                        <th><?= __('Age') ?></th>
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



                                        <p>Does anyone else live with you?</p>
                                        <p><?= $client['has_household_member'] == 1 ? "Yes" : "No" ?></p>
                                        <!--                                     householders   -->
                                        <?php if (!empty($client->householders)) : ?>
                                            <h4><?= __('Householders') ?></h4>
                                            <div class="associated-table">
                                                <table>
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



                                        <p>Is there anyone else financially dependent on you? </p>
                                        <p><?= $client['has_financial_dependent'] == 1 ? "Yes" : "No" ?></p>
                                        <!--                                        dependents-->
                                        <?php if (!empty($client->dependents)) : ?>
                                            <h4><?= __('Dependents') ?></h4>
                                            <div class="associated-table">
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
                                        <br>




                                        <p>Accountant</p>
                                        <p>Do you have accountant? <?= $client['has_accountant'] == 1 ? "Yes" : "No" ?></p>
                                        <?php if (!empty($client->accountant_name)) : ?>
                                            <p>Accountant Name: <?= h($client['accountant_name']) ?></p>
                                            <p>Accountant Firm: <?= h($client['accountant_firm']) ?></p>
                                            <p>Accountant Email: <?= h($client['accountant_email']) ?></p>
                                            <p>Accountant to help complete this section: <?= $client['$accountant_help'] == 1 ? "Yes" : "No" ?></p>
                                        <?php endif; ?>


                                        <p>Financial Adviser</p>
                                        <p>Do you have financial adviser? <?= $client['$has_adviser'] == 1 ? "Yes" : "No" ?></p>
                                        <?php if (!empty($client->adviser_name)) : ?>
                                            <p>Financial Adviser Name: <?= h($client['adviser_name']) ?></p>
                                            <p>Financial Adviser Firm: <?= h($client['adviser_firm']) ?></p>
                                            <p>Financial Adviser Email: <?= h($client['adviser_email']) ?></p>
                                            <p>Financial Adviser to complete this section: <?= $client['$adviser_help'] == 1 ? "Yes" : "No" ?></p>
                                        <?php endif; ?>

                                        <p>Referrer</p>
                                        <p>Referrer source: <?= $client['referrer_source'] ?></p>
                                        <?php if ($client['referrer_source']=="accountant" || $client['referrer_source']=="financial adviser") : ?>
                                            <p>Referrer Name: <?= h($client['referrer_name']) ?></p>
                                            <p>Referrer Firm: <?= h($client['referrer_firm']) ?></p>
                                            <p>Referrer Email: <?= h($client['referrer_email']) ?></p>
                                        <?php endif; ?>


                                        <h2>2 - Assets & Liabilities</h2>
                                        <!--   Real Estate-->
                                        <h3>Real estate</h3>
                                        <?php if (!empty($client->estates)) : ?>
                                            <div class="associated-table">
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
                                                            <td><?=  $estates->mortgage == 1 ? "Yes" : "No"  ?></td>
                                                            <td><?= h($estates->value) ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        <?php endif; ?>



                                        <!--   Bank Accounts-->
                                        <h3>Bank Accounts</h3>
                                        <?php if (!empty($client->bankaccounts)) : ?>
                                            <div class="associated-table">
                                                <table>
                                                    <tr>
                                                        <th><?= __('Bank') ?></th>
                                                        <th><?= __('Holder') ?></th>
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



                                        <!--   Motor vehicles-->
                                        <h3>Motor vehicles</h3>
                                        <?php if (!empty($client->vehicles)) : ?>
                                            <div class="associated-table">
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



                                        <!--    Investments-->
                                        <h3>Investments</h3>
                                        <?php if (!empty($client->investments)) : ?>
                                            <div class="associated-table">
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



                                        <h3>Loans and debts</h3>
                                        <p>Loan details: <?= h($client['details_youowe']) ?></p>
                                        <p>Loan agreement: <?= $client['has_owe_agreement'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Money owed to client: <?= h($client['details_youowed']) ?></p>
                                        <p>Loan agreement: <?= $client['has_owed_agreement'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Repayment estate: <?= h($client['repay_estate']) ?></p>

                                        <h3>Insurance</h3>
                                        <p>House Insurance: <?= $client['$insure_house'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Insurance Company: <?= h($client['insure_house_company']) ?></p>
                                        <p>Vehicle Insurance: <?= $client['$insure_vehicle'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Insurance Company: <?= h($client['insure_vehicle_company']) ?></p>
                                        <p>Health Insurance: <?= $client['insure_health'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Insurance Company: <?= h($client['insure_health_company']) ?></p>
                                        <p>Life Insurance: <?= $client['insure_life'] == 1 ? "Yes" : "No" ?></p>
                                        <p>Insurance Company: <?= h($client['insure_life_company']) ?></p>

                                        <h3>Superannuation</h3>
                                        <?php if (!empty($client->superannuations)) : ?>
                                            <div class="associated-table">
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



                                        <h2>3 - Executor/Trustee</h2>
                                        <h3>Executor</h3>
                                        <?php if (!empty($client->executors)) : ?>
                                            <div class="associated-table">
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

                                        <h3>Alternative Executors</h3>
                                        <?php if (!empty($client->altexecutors)) : ?>
                                            <div class="associated-table">
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

                                        <h2>4 - Guardian of Minor Children</h2>
                                        <p>Do you wish to appoint a guardian of minor
                                            children?: <?= $client['wish_appoint_child'] == 1 ? "Yes" : "No" ?></p>
                                        <?php if (!empty($client->surviving_parent_fullname)) : ?>
                                            <p>Full Name of Surviving
                                                Parent: <?= h($client['surviving_parent_fullname']) ?></p>
                                            <p>Guardian's Full Name: <?= h($client['guardian_fullname']) ?></p>
                                            <p>Guardian’s Relationship to You: <?= h($client['guardian_relation']) ?></p>
                                        <?php endif; ?>


                                        <h2>5 - Specific Bequests</h2>
                                        <p>Do you wish to leave any specific items of property to a particular
                                            person?: <?= $client['wish_property_special'] == 1 ? "Yes" : "No" ?></p>
                                        <?php if (!empty($client->bequests)) : ?>
                                            <div class="associated-table">
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



                                        <h2>6 - Beneficiaries</h2>
                                        <?php if (!empty($client->beneficiaries)) : ?>
                                            <div class="associated-table">
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



                                        <h2>7 - Attorney(s)</h2>
                                        <?php if (!empty($client->attorneys)) : ?>
                                            <div class="associated-table">
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

                                        <h3>Alternative Attorney(s)</h3>
                                        <?php if (!empty($client->altattorneys)) : ?>
                                            <div class="associated-table">
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

                                        <p>If naming more than one attorney, how would you like them to make
                                            decisions? <?= h($client['way_attorney_decision']) ?></p>

                                        <h3>Decision Maker</h3>
                                        <?php if (!empty($client->decisionmakers)) : ?>
                                            <div class="associated-table">
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



                                        <h2>8 - Addition Notes: </h2>
                                        <p><?= h($client['addition_notes']) ?></p>


                                        <hr>
                                        <p><b>The documents the clients need bring are listed below. </b></p>
                                        <ol id="documentsToBring" class="list-group-numbered">
                                            <li>Identification</li>
                                            <?= h($client->has_will == 1 ? "<li>Your existing will</li>" : "") ?>
                                            <?= h($client->has_power == 1 ? "<li>Your existing power of attorney</li>" : "") ?>
                                            <?= h($client->has_binding == 1 ? "<li>Your binding Death Benefit Nominations</li>" : "") ?>
                                            <?= h($client->has_decision_maker == 1 ? "<li>Your existing medical treatment decision maker appointment</li>" : "") ?>
                                            <?= h($client->has_superannu_deed == 1 ? "<li>Copy of Self Managed Superannuation Trust Deed</li>" : "") ?>
                                            <?= h($client->has_family_deed == 1 ? "<li>Copy of Family Trust Deed</li>" : "") ?>
                                            <?= h($client->is_office_holder == 1 ? "<li>Copy of shareholders agreement and company constitution</li>" : "") ?>
                                            <?= h($client->is_beneficiary == 1 ? "<li>Copy of existing trustees</li>" : "") ?>
                                            <?= h($client->in_partnership == 1 ? "<li>Copy of partnership agreement</li>" : "") ?>
                                        </ol>


                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span>This email and any attachment is confidential and for the use of the intended recipient(s) only. It may also be the subject of legal professional privilege. If you are not the intended recipient, any use, interference with, disclosure or copying of this material is unauthorised and prohibited. </span>
                            </td>
                        </tr>

                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

