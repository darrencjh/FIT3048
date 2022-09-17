<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BankaccountsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BankaccountsTable Test Case
 */
class BankaccountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BankaccountsTable
     */
    protected $Bankaccounts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Bankaccounts',
        'app.Clients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bankaccounts') ? [] : ['className' => BankaccountsTable::class];
        $this->Bankaccounts = $this->getTableLocator()->get('Bankaccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bankaccounts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BankaccountsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BankaccountsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
