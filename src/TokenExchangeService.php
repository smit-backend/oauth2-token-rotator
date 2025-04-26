<?php

declare(strict_types=1);

namespace SmitBackend\TokenRotator;

use SmitBackend\TokenRotator\Contracts\TokenStorageInterface;

/**
 * Class TokenExchangeService
 *
 * @package SmitBackend\TokenRotator
 */
class TokenExchangeService implements TokenStorageInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
