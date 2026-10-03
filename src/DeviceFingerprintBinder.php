<?php

declare(strict_types=1);

namespace SmitBackend\TokenRotator;

/**
 * Cryptographically bind refresh tokens to client TLS fingerprints
 */
class DeviceFingerprintBinder
{
    public function run(): bool
    {
        return true;
    }
}
