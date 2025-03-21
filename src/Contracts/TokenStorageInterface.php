<?php

declare(strict_types=1);

namespace SmitBackend\TokenRotator\Contracts;

/**
 * Interface TokenStorageInterface
 *
 * @package SmitBackend\TokenRotator
 */
interface TokenStorageInterface
{
    public function execute(array $payload = []): mixed;
}
