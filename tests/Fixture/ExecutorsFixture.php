<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExecutorsFixture
 */
class ExecutorsFixture extends TestFixture
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
                'id' => 'a3dd59dd-7758-4c95-bdf9-3215d84b113d',
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'cc976a25-a917-44ca-92a9-da40ebf336f6',
            ],
        ];
        parent::init();
    }
}
