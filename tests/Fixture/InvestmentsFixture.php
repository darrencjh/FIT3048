<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvestmentsFixture
 */
class InvestmentsFixture extends TestFixture
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
                'id' => 'edc439e2-fa55-49c1-a8a0-6faa39bc1ef8',
                'type' => 'Lorem ipsum dolor sit amet',
                'held' => 'Lorem ipsum dolor sit amet',
                'value' => 1.5,
                'client_id' => '8bd127f8-588a-4eee-9225-117adec01d46',
            ],
        ];
        parent::init();
    }
}
