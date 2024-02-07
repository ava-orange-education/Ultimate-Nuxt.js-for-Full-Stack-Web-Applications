<?php

declare(strict_types=1);

namespace League\Route\Http\Exception;

use Exception;
use League\Route\Http;

class BadRequestException extends Http\Exception
{
    public function __construct(string $message = 'Bad Request', ?Exception $previous = null, int $code = 0)
    {
        parent::__construct(400, $message, $previous, [], $code);
    }
}
