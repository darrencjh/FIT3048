<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DependentsFixture
 */
class DependentsFixture extends TestFixture
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
                'id' => '80b60e8b-4d32-4e0f-8ffc-1af3e5af8766',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'relationship' => 'Lorem ipsum dolor sit amet',
                'nature' => 'Lorem ipsum dolor sit amet',
                'client_id' => '5559afb0-5cdb-4c10-a913-dc13b358ecae',
            ],
        ];
        parent::init();
    }
}
