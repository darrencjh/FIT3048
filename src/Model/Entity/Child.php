<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Child Entity
 *
 * @property string $id
 * @property string $full_name
 * @property \Cake\I18n\FrozenDate|null $dob
 * @property string|null $address
 * @property string|null $mother
 * @property string|null $father
 * @property string|null $client_id
 *
 * @property \App\Model\Entity\Client $client
 */
class Child extends Entity
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
        'dob' => true,
        'address' => true,
        'mother' => true,
        'father' => true,
        'client_id' => true,
        'client' => true,
    ];
}
