<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AvailabilitiesFixture
 */
class AvailabilitiesFixture extends TestFixture
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
                'id' => '8a4c5799-dd17-443a-a16a-378627750633',
                'weekday' => 'Lorem ip',
                'booked_time' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
