<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HouseholdersFixture
 */
class HouseholdersFixture extends TestFixture
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
                'id' => 'a315c78e-dc9f-4fc0-8134-8e2f2b69e7fd',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'relationship' => 'Lorem ipsum dolor sit amet',
                'client_id' => '4eaf7d25-2e24-449f-92b2-0d8cd83db3b6',
            ],
        ];
        parent::init();
    }
}
