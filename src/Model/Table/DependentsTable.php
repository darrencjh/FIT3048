<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dependents Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\Dependent newEmptyEntity()
 * @method \App\Model\Entity\Dependent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dependent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dependent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dependent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dependent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dependent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dependent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dependent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dependent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dependent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DependentsTable extends Table
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

        $this->setTable('dependents');
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
            ->scalar('full_name')
            ->maxLength('full_name', 255)
            ->requirePresence('full_name', 'create')
            ->notEmptyString('full_name');

        $validator
            ->scalar('relationship')
            ->maxLength('relationship', 255)
            ->allowEmptyString('relationship');

        $validator
            ->scalar('nature')
            ->maxLength('nature', 255)
            ->allowEmptyString('nature');

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
