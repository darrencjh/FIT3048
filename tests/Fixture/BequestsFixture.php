<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BequestsFixture
 */
class BequestsFixture extends TestFixture
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
                'id' => '096f4279-7187-47e3-89ea-5da687803138',
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'ea7ce837-407f-4154-a321-fcbdd622c42a',
            ],
        ];
        parent::init();
    }
}
