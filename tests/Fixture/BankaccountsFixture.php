<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BankaccountsFixture
 */
class BankaccountsFixture extends TestFixture
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
                'id' => '6a539aec-b67e-4a9b-8732-6b0ca1bfa6e7',
                'bank' => 'Lorem ipsum dolor sit amet',
                'holder' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'value' => 1.5,
                'client_id' => '7fd3c244-0824-4594-ac2e-bdd694967173',
            ],
        ];
        parent::init();
    }
}
