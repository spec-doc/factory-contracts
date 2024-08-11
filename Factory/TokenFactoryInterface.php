<?php

declare(strict_types=1);

namespace SpecDoc\Specificator\Contracts\Factory;

use SpecDoc\Specificator\Contracts\Factory\FactoryExceptionInterface;
use SpecDoc\Specificator\Contracts\Common\TokenInterface;

/**
 * The factory is necessary for the automatic creation of tokens.
 */
interface TokenFactoryInterface
{
    /**
     * Returns the created token.
     *
     * @param string $source Data for creating a token
     *
     * @return TokenInterface
     * @throws FactoryExceptionInterface Any factory errors
     */
    public function create(string $source): TokenInterface;
}
