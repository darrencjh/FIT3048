<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AttorneysFixture
 */
class AttorneysFixture extends TestFixture
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
                'id' => 'e3560c76-42df-4239-a9c2-81ae058e7d11',
                'name' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'ccb52416-69b8-43eb-9bde-ecb306c86308',
            ],
        ];
        parent::init();
    }
}
