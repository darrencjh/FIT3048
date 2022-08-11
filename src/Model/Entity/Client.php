<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property string $id
 * @property string $full_name
 * @property string $other_names
 * @property string $date_birth
 * @property string $occupation
 * @property string $address
 * @property string $postal_address
 * @property string $email
 * @property string $phone
 * @property string $referred_by
 * @property bool $is_will
 * @property bool $is_powers
 * @property bool $is_binding
 * @property string|null $will_text
 * @property string|null $powers_text
 * @property string|null $binding_text
 */
class Client extends Entity
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
        'other_names' => true,
        'date_birth' => true,
        'occupation' => true,
        'address' => true,
        'postal_address' => true,
        'email' => true,
        'phone' => true,
        'referred_by' => true,
        'is_will' => true,
        'is_powers' => true,
        'is_binding' => true,
        'will_text' => true,
        'powers_text' => true,
        'binding_text' => true,
    ];
}
