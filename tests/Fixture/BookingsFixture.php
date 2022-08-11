<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingsFixture
 */
class BookingsFixture extends TestFixture
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
                'id' => '01299fc1-64f1-41c9-95a5-4062d35fe0e0',
                'date' => '2022-08-11',
                'booked_time' => 'Lorem ip',
                'service' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'location' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ip',
                'referred_by' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
