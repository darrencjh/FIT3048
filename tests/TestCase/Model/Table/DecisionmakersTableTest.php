<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DecisionmakersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DecisionmakersTable Test Case
 */
class DecisionmakersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DecisionmakersTable
     */
    protected $Decisionmakers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Decisionmakers',
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
        $config = $this->getTableLocator()->exists('Decisionmakers') ? [] : ['className' => DecisionmakersTable::class];
        $this->Decisionmakers = $this->getTableLocator()->get('Decisionmakers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Decisionmakers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DecisionmakersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DecisionmakersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
