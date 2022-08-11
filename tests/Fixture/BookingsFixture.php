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
                'id' => 'e4cebe41-9724-4e14-9403-76cc61a65977',
                'date' => '2022-08-10',
                'booked_time' => 'Lorem ip',
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
