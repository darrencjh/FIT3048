<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AltexecutorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AltexecutorsTable Test Case
 */
class AltexecutorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AltexecutorsTable
     */
    protected $Altexecutors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Altexecutors',
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
        $config = $this->getTableLocator()->exists('Altexecutors') ? [] : ['className' => AltexecutorsTable::class];
        $this->Altexecutors = $this->getTableLocator()->get('Altexecutors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Altexecutors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AltexecutorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AltexecutorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
