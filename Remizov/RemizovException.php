<?php
namespace Remizov;
use RuntimeException;
use Throwable;
class RemizovException extends RuntimeException
{
    protected $message;

    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->message = $message;
    }

    public function get_message(): string
    {
        return $this->message;
    }
} 