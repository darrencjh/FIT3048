<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientsFixture
 */
class ClientsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '76bc36e4-e73d-46c9-8033-44dbde65389b',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'other_names' => 'Lorem ipsum dolor sit amet',
                'date_birth' => 'Lorem ipsum dolor sit amet',
                'occupation' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'postal_address' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'referred_by' => 'Lorem ipsum dolor sit amet',
                'is_will' => 1,
                'is_powers' => 1,
                'is_binding' => 1,
                'will_text' => 'Lorem ipsum dolor sit amet',
                'powers_text' => 'Lorem ipsum dolor sit amet',
                'binding_text' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
