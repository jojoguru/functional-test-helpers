<?php

declare(strict_types=1);

namespace Brainbits\FunctionalTestHelpers\Request;

use RuntimeException;

use function Safe\sprintf;

// phpcs:disable Generic.CodeAnalysis.UselessOverridingMethod.Found

final class InvalidRequest extends RuntimeException
{
    private function __construct(string $message)
    {
        parent::__construct($message);
    }

    public static function invalidUriParam(string $token): self
    {
        return new self(sprintf('Uri param token %s not found', $token));
    }
}
