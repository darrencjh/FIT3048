<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Superannuations Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\Superannuation newEmptyEntity()
 * @method \App\Model\Entity\Superannuation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Superannuation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Superannuation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Superannuation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Superannuation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Superannuation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Superannuation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Superannuation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Superannuation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Superannuation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Superannuation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Superannuation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SuperannuationsTable extends Table
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

        $this->setTable('superannuations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
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
            ->decimal('fund')
            ->requirePresence('fund', 'create')
            ->notEmptyString('fund');

        $validator
            ->decimal('value')
            ->allowEmptyString('value');

        $validator
            ->scalar('nomination')
            ->maxLength('nomination', 255)
            ->allowEmptyString('nomination');

        $validator
            ->scalar('binding')
            ->maxLength('binding', 10)
            ->allowEmptyString('binding');

        $validator
            ->uuid('client_id')
            ->allowEmptyString('client_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('client_id', 'Clients'), ['errorField' => 'client_id']);

        return $rules;
    }
}
