<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dependent Entity
 *
 * @property string $id
 * @property string $full_name
 * @property string|null $relationship
 * @property string|null $nature
 * @property string|null $client_id
 *
 * @property \App\Model\Entity\Client $client
 */
class Dependent extends Entity
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
        'relationship' => true,
        'nature' => true,
        'client_id' => true,
        'client' => true,
    ];
}
