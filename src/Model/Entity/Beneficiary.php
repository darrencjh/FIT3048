<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Beneficiary Entity
 *
 * @property string $id
 * @property string $name
 * @property string|null $relation
 * @property string|null $situation
 * @property string|null $client_id
 *
 * @property \App\Model\Entity\Client $client
 */
class Beneficiary extends Entity
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
        'name' => true,
        'relation' => true,
        'situation' => true,
        'client_id' => true,
        'client' => true,
    ];
}
