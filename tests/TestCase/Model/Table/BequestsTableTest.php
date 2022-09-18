<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BequestsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BequestsTable Test Case
 */
class BequestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BequestsTable
     */
    protected $Bequests;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Bequests',
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
        $config = $this->getTableLocator()->exists('Bequests') ? [] : ['className' => BequestsTable::class];
        $this->Bequests = $this->getTableLocator()->get('Bequests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bequests);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BequestsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BequestsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
