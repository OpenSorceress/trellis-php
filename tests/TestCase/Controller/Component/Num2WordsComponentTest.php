<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\Num2WordsComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\Num2WordsComponent Test Case
 */
class Num2WordsComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\Num2WordsComponent
     */
    protected $Num2Words;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Num2Words = new Num2WordsComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Num2Words);

        parent::tearDown();
    }
}
