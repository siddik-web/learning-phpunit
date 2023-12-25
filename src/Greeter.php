<?php declare(strict_types=1);

/**
 * Greeter
 * 
 * @since 1.0.0
 */
final class Greeter
{    
    /**
     * Greet by name
     *
     * @param  mixed $name
     * @return string
     * @since 1.0.0
     */
    public function greet(string $name): string
    {
        return 'Hello ' . $name . '!';
    }
}