<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \App\Model\Table\HouseholdersTable&\Cake\ORM\Association\HasMany $Householders
 * @property \App\Model\Table\DependentsTable&\Cake\ORM\Association\HasMany $Dependents
 *@property \App\Model\Table\ChildrenTable&\Cake\ORM\Association\HasMany $Children
 *@property \App\Model\Table\GrandchildrenTable&\Cake\ORM\Association\HasMany $Grandchildren
 *
 *@property \App\Model\Table\EstatesTable&\Cake\ORM\Association\HasMany $Estates
 *@property \App\Model\Table\BankaccountsTable&\Cake\ORM\Association\HasMany $Bankaccounts
 *@property \App\Model\Table\VehiclesTable&\Cake\ORM\Association\HasMany $Vehicles
 *@property \App\Model\Table\InvestmentsTable&\Cake\ORM\Association\HasMany $Investments
 *@property \App\Model\Table\SuperannuationsTable&\Cake\ORM\Association\HasMany $Superannuations
 *
 *@property \App\Model\Table\ExecutorsTable&\Cake\ORM\Association\HasMany $Executors
 *@property \App\Model\Table\AltexecutorsTable&\Cake\ORM\Association\HasMany $Altexecutors
 *
 *@property \App\Model\Table\BequestsTable&\Cake\ORM\Association\HasMany $Bequests
 *@property \App\Model\Table\BeneficiariesTable&\Cake\ORM\Association\HasMany $Beneficiaries
 *
 *
 *@property \App\Model\Table\AttorneysTable&\Cake\ORM\Association\HasMany $Attorneys
 *@property \App\Model\Table\AltattorneysTable&\Cake\ORM\Association\HasMany $Altattorneys
 *@property \App\Model\Table\DecisionmakersTable&\Cake\ORM\Association\HasMany $Decisionmakers
 *
 *
 * @method \App\Model\Entity\Client newEmptyEntity()
 * @method \App\Model\Entity\Client newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClientsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('clients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Householders', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Dependents', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Children', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Grandchildren', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        //page 3
        $this->hasMany('Estates', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Bankaccounts', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Vehicles', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Investments', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Superannuations', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Executors', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Altexecutors', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Bequests', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Beneficiaries', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Attorneys', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Altattorneys', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);

        $this->hasMany('Decisionmakers', [
            'foreignKey' => 'client_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);


    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('full_name')
            ->maxLength('full_name', 128)
            ->requirePresence('full_name', 'create')
            ->notEmptyString('full_name');

        $validator
            ->scalar('previous_name')
            ->maxLength('previous_name', 128)
            ->allowEmptyString('previous_name');

        $validator
            ->date('date_of_birth')
            ->requirePresence('date_of_birth', 'create')
            ->notEmptyDate('date_of_birth');

        $validator
            ->scalar('occupation')
            ->maxLength('occupation', 64)
            ->requirePresence('occupation', 'create')
            ->notEmptyString('occupation');

        $validator
            ->scalar('home_address')
            ->maxLength('home_address', 255)
            ->requirePresence('home_address', 'create')
            ->notEmptyString('home_address');

        $validator
            ->scalar('postal_address')
            ->maxLength('postal_address', 255)
            ->allowEmptyString('postal_address');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 10)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->boolean('has_will')
            ->allowEmptyString('has_will');

        $validator
            ->boolean('has_power')
            ->allowEmptyString('has_power');

        $validator
            ->boolean('has_binding')
            ->allowEmptyString('has_binding');

        $validator
            ->boolean('has_decision_maker')
            ->allowEmptyString('has_decision_maker');

        $validator
            ->boolean('has_superannu_deed')
            ->allowEmptyString('has_superannu_deed');

        $validator
            ->boolean('is_health')
            ->allowEmptyString('is_health');

        $validator
            ->scalar('health_desc')
            ->maxLength('health_desc', 1024)
            ->allowEmptyString('health_desc');

        $validator
            ->scalar('relationship_status')
            ->maxLength('relationship_status', 64)
            ->allowEmptyString('relationship_status');

        $validator
            ->scalar('married_fullName')
            ->maxLength('married_fullName', 128)
            ->allowEmptyString('married_fullName');

        $validator
            ->date('married_dob')
            ->allowEmptyDate('married_dob');

        $validator
            ->scalar('married_phone')
            ->maxLength('married_phone', 10)
            ->allowEmptyString('married_phone');

        $validator
            ->scalar('defacto_fullName')
            ->maxLength('defacto_fullName', 128)
            ->allowEmptyString('defacto_fullName');

        $validator
            ->date('defacto_living')
            ->allowEmptyDate('defacto_living');

        $validator
            ->boolean('defacto_mariage')
            ->allowEmptyString('defacto_mariage');

        $validator
            ->boolean('sepdiv_property_settlement')
            ->allowEmptyString('sepdiv_property_settlement');

        $validator
            ->date('settlement_finish')
            ->allowEmptyDate('settlement_finish');

        $validator
            ->boolean('has_child_current')
            ->allowEmptyString('has_child_current');

        $validator
            ->boolean('has_child_prev')
            ->allowEmptyString('has_child_prev');

        $validator
            ->boolean('has_household_member')
            ->allowEmptyString('has_household_member');

        $validator
            ->boolean('has_financial_dependent')
            ->allowEmptyString('has_financial_dependent');

        $validator
            ->boolean('has_accountant')
            ->allowEmptyString('has_accountant');

        $validator
            ->scalar('accountant_name')
            ->maxLength('accountant_name', 128)
            ->allowEmptyString('accountant_name');

        $validator
            ->scalar('accountant_firm')
            ->maxLength('accountant_firm', 128)
            ->allowEmptyString('accountant_firm');

        $validator
            ->scalar('accountant_email')
            ->maxLength('accountant_email', 64)
            ->allowEmptyString('accountant_email');

        $validator
            ->boolean('accountant_help')
            ->allowEmptyString('accountant_help');

        $validator
            ->boolean('has_adviser')
            ->allowEmptyString('has_adviser');

        $validator
            ->scalar('adviser_name')
            ->maxLength('adviser_name', 128)
            ->allowEmptyString('adviser_name');

        $validator
            ->scalar('adviser_firm')
            ->maxLength('adviser_firm', 128)
            ->allowEmptyString('adviser_firm');

        $validator
            ->scalar('adviser_email')
            ->maxLength('adviser_email', 64)
            ->allowEmptyString('adviser_email');

        $validator
            ->boolean('adviser_help')
            ->allowEmptyString('adviser_help');

        $validator
            ->scalar('referrer_source')
            ->maxLength('referrer_source', 128)
            ->allowEmptyString('referrer_source');

        $validator
            ->scalar('referrer_name')
            ->maxLength('referrer_name', 128)
            ->allowEmptyString('referrer_name');

        $validator
            ->scalar('referrer_firm')
            ->maxLength('referrer_firm', 128)
            ->allowEmptyString('referrer_firm');

        $validator
            ->scalar('referrer_email')
            ->maxLength('referrer_email', 64)
            ->allowEmptyString('referrer_email');

        $validator
            ->scalar('details_youowe')
            ->allowEmptyString('details_youowe');

        $validator
            ->boolean('has_owe_agreement')
            ->allowEmptyString('has_owe_agreement');

        $validator
            ->scalar('details_youowed')
            ->allowEmptyString('details_youowed');

        $validator
            ->boolean('has_owed_agreement')
            ->allowEmptyString('has_owed_agreement');

        $validator
            ->scalar('repay_estate')
            ->maxLength('repay_estate', 32)
            ->allowEmptyString('repay_estate');

        $validator
            ->boolean('insure_house')
            ->allowEmptyString('insure_house');

        $validator
            ->scalar('insure_house_company')
            ->maxLength('insure_house_company', 64)
            ->allowEmptyString('insure_house_company');

        $validator
            ->boolean('insure_vehicle')
            ->allowEmptyString('insure_vehicle');

        $validator
            ->scalar('insure_vehicle_company')
            ->maxLength('insure_vehicle_company', 64)
            ->allowEmptyString('insure_vehicle_company');

        $validator
            ->boolean('insure_health')
            ->allowEmptyString('insure_health');

        $validator
            ->scalar('insure_health_company')
            ->maxLength('insure_health_company', 64)
            ->allowEmptyString('insure_health_company');

        $validator
            ->boolean('insure_life')
            ->allowEmptyString('insure_life');

        $validator
            ->scalar('insure_life_company')
            ->maxLength('insure_life_company', 64)
            ->allowEmptyString('insure_life_company');

        $validator
            ->decimal('insure_life_value')
            ->allowEmptyString('insure_life_value');

        $validator
            ->boolean('is_office_holder')
            ->allowEmptyString('is_office_holder');

        $validator
            ->boolean('is_beneficiary')
            ->allowEmptyString('is_beneficiary');

        $validator
            ->boolean('in_partnership')
            ->allowEmptyString('in_partnership');

        $validator
            ->boolean('wish_appoint_child')
            ->allowEmptyString('wish_appoint_child');

        $validator
            ->scalar('surviving_parent_fullname')
            ->maxLength('surviving_parent_fullname', 128)
            ->allowEmptyString('surviving_parent_fullname');

        $validator
            ->scalar('guardian_fullname')
            ->maxLength('guardian_fullname', 128)
            ->allowEmptyString('guardian_fullname');

        $validator
            ->scalar('guardian_relation')
            ->maxLength('guardian_relation', 64)
            ->allowEmptyString('guardian_relation');

        $validator
            ->boolean('wish_property_special')
            ->allowEmptyString('wish_property_special');

        $validator
            ->scalar('way_attorney_decision')
            ->maxLength('way_attorney_decision', 128)
            ->allowEmptyString('way_attorney_decision');

        $validator
            ->scalar('addition_notes')
            ->allowEmptyString('addition_notes');

        return $validator;
    }
}
