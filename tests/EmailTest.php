<?php
declare(strict_types=1);


use App\Email;
use PHPUnit\Framework\TestCase;

/**
 * Email Test class
 * @since 1.0.0
 */
final class EmailTest extends TestCase
{
    /**
     * Test valid email from string
     *
     * @return void
     * @since 1.0.0
     */
    public function testCanBeCreatedFromValidEmail(): void
    {
        $string = "siddikcoder@gmail.com";
        $email = Email::fromString($string);

        $this->assertSame($string, $email->asString());
    }
    
    /**
     * Test invalid email from string
     *
     * @return void
     * @since 1.0.0
     */
    public function testCannotBeCreatedFromInvalidEmail(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Email::fromString("invalid");
    }
}