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
                'id' => '8d29084b-c887-41ec-b55b-778fcb366880',
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'f556e38e-6f1b-416c-b935-fd3bb09f79f0',
            ],
        ];
        parent::init();
    }
}
