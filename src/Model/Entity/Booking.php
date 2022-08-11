<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property string $id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $booked_time
 * @property string $service
 * @property string $name
 * @property string $email
 * @property string $location
 * @property string $phone
 * @property string|null $referred_by
 */
class Booking extends Entity
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
        'date' => true,
        'booked_time' => true,
        'service' => true,
        'name' => true,
        'email' => true,
        'location' => true,
        'phone' => true,
        'referred_by' => true,
    ];
}
