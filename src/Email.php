<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

/**
 * Email class
 * 
 * @since 1.0.0
 */
final class Email
{
    /**
     * Email address
     *
     * @var string
     * 
     * @since 1.0.0
     */
    private string $email;
    
    /**
     * __construct
     *
     * @param  mixed $email Email Address
     * @return void
     * @since 1.0.0
     */
    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);
        $this->email = $email;
    }
        
    /**
     * fromString
     *
     * @param  mixed $email Email address
     * @return self
     * @since 1.0.0
     */
    public static function fromString(string $email): self
    {
        return new self($email);
    }
        
    /**
     * Return As String
     *
     * @return string
     * @since 1.0.0
     */
    public function asString(): string
    {
        return $this->email;
    }
    
    /**
     * Check valid email address
     *
     * @param  string $email    Valid email address
     * @return void
     * @since 1.0.0
     */
    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}