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
                'id' => '1178264d-98bc-4bba-b912-f8b44acb2b38',
                'name' => 'Lorem ipsum dolor sit amet',
                'dob' => '2022-09-18',
                'phone' => 'Lorem ip',
                'client_id' => 'f11f5e20-1400-4ce6-a58c-fd5c1ef3c395',
            ],
        ];
        parent::init();
    }
}
