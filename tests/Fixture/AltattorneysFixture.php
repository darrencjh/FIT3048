<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AltattorneysFixture
 */
class AltattorneysFixture extends TestFixture
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
                'id' => '93bb3e98-e95f-4685-8605-638de0ae3fa2',
                'name' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'd906d7c7-5e79-4c9f-ba73-d9cf8443cac0',
            ],
        ];
        parent::init();
    }
}
