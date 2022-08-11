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
            ->maxLength('full_name', 255)
            ->requirePresence('full_name', 'create')
            ->notEmptyString('full_name');

        $validator
            ->scalar('other_names')
            ->maxLength('other_names', 255)
            ->requirePresence('other_names', 'create')
            ->notEmptyString('other_names');

        $validator
            ->scalar('date_birth')
            ->maxLength('date_birth', 255)
            ->requirePresence('date_birth', 'create')
            ->notEmptyString('date_birth');

        $validator
            ->scalar('occupation')
            ->maxLength('occupation', 255)
            ->requirePresence('occupation', 'create')
            ->notEmptyString('occupation');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('postal_address')
            ->maxLength('postal_address', 255)
            ->requirePresence('postal_address', 'create')
            ->notEmptyString('postal_address');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('referred_by')
            ->maxLength('referred_by', 255)
            ->requirePresence('referred_by', 'create')
            ->notEmptyString('referred_by');

        $validator
            ->boolean('is_will')
            ->notEmptyString('is_will');

        $validator
            ->boolean('is_powers')
            ->notEmptyString('is_powers');

        $validator
            ->boolean('is_binding')
            ->notEmptyString('is_binding');

        $validator
            ->scalar('will_text')
            ->maxLength('will_text', 255)
            ->allowEmptyString('will_text');

        $validator
            ->scalar('powers_text')
            ->maxLength('powers_text', 255)
            ->allowEmptyString('powers_text');

        $validator
            ->scalar('binding_text')
            ->maxLength('binding_text', 255)
            ->allowEmptyString('binding_text');

        return $validator;
    }
}
