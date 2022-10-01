<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Availabilities Model
 *
 * @method \App\Model\Entity\Availability newEmptyEntity()
 * @method \App\Model\Entity\Availability newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Availability[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Availability get($primaryKey, $options = [])
 * @method \App\Model\Entity\Availability findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Availability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Availability[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Availability|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Availability saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Availability[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Availability[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Availability[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Availability[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AvailabilitiesTable extends Table
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

        $this->setTable('availabilities');
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
            ->scalar('weekday')
            ->maxLength('weekday', 10)
            ->requirePresence('weekday', 'create')
            ->notEmptyString('weekday');

        $validator
            ->scalar('booked_time')
            ->maxLength('booked_time', 10)
            ->requirePresence('booked_time', 'create')
            ->notEmptyString('booked_time');

        return $validator;
    }
}
