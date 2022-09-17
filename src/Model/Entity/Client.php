<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property string $id
 * @property string $full_name
 * @property string|null $previous_name
 * @property \Cake\I18n\FrozenDate $date_of_birth
 * @property string $occupation
 * @property string $home_address
 * @property string|null $postal_address
 * @property string $email
 * @property string $phone
 * @property bool|null $has_will
 * @property bool|null $has_power
 * @property bool|null $has_binding
 * @property bool|null $has_decision_maker
 * @property bool|null $has_superannu_deed
 * @property bool|null $has_family_deed
 * @property bool|null $is_health
 * @property string|null $health_desc
 * @property string|null $relationship_status
 * @property string|null $married_fullName
 * @property \Cake\I18n\FrozenDate|null $married_dob
 * @property string|null $married_phone
 * @property string|null $defacto_fullName
 * @property \Cake\I18n\FrozenDate|null $defacto_living
 * @property bool|null $defacto_mariage
 * @property bool|null $sepdiv_property_settlement
 * @property bool|null $has_child_current
 * @property bool|null $has_child_prev
 * @property bool|null $has_household_member
 * @property bool|null $has_financial_dependent
 * @property bool|null $has_accountant
 * @property string|null $accountant_name
 * @property string|null $accountant_firm
 * @property string|null $accountant_email
 * @property bool|null $accountant_help
 * @property bool|null $has_adviser
 * @property string|null $adviser_name
 * @property string|null $adviser_firm
 * @property string|null $adviser_email
 * @property bool|null $adviser_help
 * @property bool|null $referrer_source
 * @property string|null $referrer_name
 * @property string|null $referrer_firm
 * @property string|null $referrer_email
 * @property string|null $details_youowe
 * @property bool|null $has_owe_agreement
 * @property string|null $details_youowed
 * @property bool|null $has_owed_agreement
 * @property string|null $repay_estate
 * @property bool|null $insure_house
 * @property string|null $insure_house_company
 * @property bool|null $insure_vehicle
 * @property string|null $insure_vehicle_company
 * @property bool|null $insure_health
 * @property string|null $insure_health_company
 * @property bool|null $insure_life
 * @property string|null $insure_life_company
 * @property bool|null $is_office_holder
 * @property bool|null $is_beneficiary
 * @property bool|null $in_partnership
 * @property bool|null $wish_appoint_child
 * @property string|null $surviving_parent_fullname
 * @property string|null $guardian_fullname
 * @property string|null $guardian_relation
 * @property bool|null $wish_property_special
 * @property string|null $way_attorney_decision
 * @property string|null $addition_notes
 *
 * @property \App\Model\Entity\Householder[] $householders
 * @property \App\Model\Entity\Dependent[] $dependents
 * @property \App\Model\Entity\Child[] $children
 * @property \App\Model\Entity\Grandchild[] $grandchildren
 *
 * @property \App\Model\Entity\Estate[] $estates
 * @property \App\Model\Entity\Bankaccount[] $bankaccounts
 * @property \App\Model\Entity\Vehicle[] $vehicles
 * @property \App\Model\Entity\Investment[] $investments
 * @property \App\Model\Entity\Superannuation[] $superannuations
 *
 *
 */
class Client extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'full_name' => true,
        'previous_name' => true,
        'date_of_birth' => true,
        'occupation' => true,
        'home_address' => true,
        'postal_address' => true,
        'email' => true,
        'phone' => true,
        'has_will' => true,
        'has_power' => true,
        'has_binding' => true,
        'has_decision_maker' => true,
        'has_superannu_deed' => true,
        'has_family_deed' => true,
        'is_health' => true,
        'health_desc' => true,
        'relationship_status' => true,
        'married_fullName' => true,
        'married_dob' => true,
        'married_phone' => true,
        'defacto_fullName' => true,
        'defacto_living' => true,
        'defacto_mariage' => true,
        'sepdiv_property_settlement' => true,

        'has_child_current' => true,
        'has_child_prev' => true,
        'children'=>true,
        'grandchildren'=>true,

        'has_household_member' => true,
        'householders' => true,

        'has_financial_dependent' => true,
        'dependents'=>true,

        'has_accountant' => true,
        'accountant_name' => true,
        'accountant_firm' => true,
        'accountant_email' => true,
        'accountant_help' => true,
        'has_adviser' => true,
        'adviser_name' => true,
        'adviser_firm' => true,
        'adviser_email' => true,
        'adviser_help' => true,
        'referrer_source' => true,
        'referrer_name' => true,
        'referrer_firm' => true,
        'referrer_email' => true,

        'estates' => true,
        'bankaccounts'=> true,
        'vehicles'=> true,
        'investments'=> true,
        'superannuations'=> true,


        'details_youowe' => true,
        'has_owe_agreement' => true,
        'details_youowed' => true,
        'has_owed_agreement' => true,
        'repay_estate' => true,
        'insure_house' => true,
        'insure_house_company' => true,
        'insure_vehicle' => true,
        'insure_vehicle_company' => true,
        'insure_health' => true,
        'insure_health_company' => true,
        'insure_life' => true,
        'insure_life_company' => true,
        'is_office_holder' => true,
        'is_beneficiary' => true,
        'in_partnership' => true,
        'wish_appoint_child' => true,
        'surviving_parent_fullname' => true,
        'guardian_fullname' => true,
        'guardian_relation' => true,
        'wish_property_special' => true,
        'way_attorney_decision' => true,
        'addition_notes' => true,
    ];
}
