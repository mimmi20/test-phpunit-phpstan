<?php
/**
 * This file is part of the mimmi20/test-phpunit-phpstan package.
 *
 * Copyright (c) 2023, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Mimmi20\TestPhpstan;

final class ConfigProvider
{
    /**
     * Return general-purpose laminas-navigation configuration.
     *
     * @return array<string, array<string, array<string, string>>>
     * @phpstan-return array{dependencies: array{factories: array<string, string>}}
     *
     * @throws void
     *
     * @psalm-suppress ReservedWord
     */
    public function __invoke(): array
    {
        return ['dependencies' => $this->getDependencyConfig()];
    }

    /**
     * Return application-level dependency configuration.
     *
     * @return array<string, array<string, string>>
     * @phpstan-return array{factories: array<string, string>}
     *
     * @throws void
     *
     * @psalm-suppress ReservedWord
     */
    public function getDependencyConfig(): array
    {
        return ['factories' => ['a' => 'b']];
    }
}
