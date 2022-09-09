<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Suburb Entity
 *
 * @property int $id
 * @property string|null $postcode
 * @property string|null $suburb
 * @property string|null $state
 */
class Suburb extends Entity
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
        'postcode' => true,
        'suburb' => true,
        'state' => true,
        'latitude' => true,
        'longitude' => true,
    ];
}
