<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AltattorneysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AltattorneysTable Test Case
 */
class AltattorneysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AltattorneysTable
     */
    protected $Altattorneys;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Altattorneys',
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
        $config = $this->getTableLocator()->exists('Altattorneys') ? [] : ['className' => AltattorneysTable::class];
        $this->Altattorneys = $this->getTableLocator()->get('Altattorneys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Altattorneys);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AltattorneysTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AltattorneysTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
