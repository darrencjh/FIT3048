<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DecisionmakersFixture
 */
class DecisionmakersFixture extends TestFixture
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
                'id' => '6f388dcf-471f-4e82-a849-dca699b2a304',
                'name' => 'Lorem ipsum dolor sit amet',
                'dob' => '2022-10-03',
                'address' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ip',
                'client_id' => '65cb6242-7a77-4b6e-8a56-20422d604667',
            ],
        ];
        parent::init();
    }
}
