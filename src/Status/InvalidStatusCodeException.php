<?php

namespace Simplicer\Http\Status;

/**
 * Class InvalidStatusCodeException
 *
 * Exception thrown when an invalid HTTP status code is encountered.
 */
class InvalidStatusCodeException extends \Exception
{
    /**
     * @var string $statusCode The invalid status code
     */
    protected string $statusCode;

    /**
     * InvalidStatusCodeException constructor.
     *
     * @param string $statusCode The invalid status code
     * @param string $message The exception message
     * @param int $code The exception code
     * @param \Throwable|null $previous The previous throwable used for exception chaining
     */
    public function __construct(string $statusCode, $message = "", $code = 0, ?\Throwable $previous = null)
    {
        if ($message == "") {
            $message = "Invalid http status code: $statusCode";
        }
        $this->statusCode = $statusCode;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the invalid status code.
     *
     * @return string The invalid status code
     */
    public function getStatusCode(): string
    {
        return $this->statusCode;
    }
}
