<?php declare(strict_types=1);


use App\Greeter;
use PHPUnit\Framework\TestCase;

/**
 * GreeterTest
 * @since 1.0.0
 */
final class GreeterTest extends TestCase
{        
    /**
     * Test Greets With Name
     *
     * @return void
     * @since 1.0.0
     */
    public function testGreetsWithName(): void
    {
        $greeter = new Greeter;

        $greeting = $greeter->greet("Md Siddiqur Rahman");

        $this->assertSame("Hello Md Siddiqur Rahman!", $greeting);
        
    }
}