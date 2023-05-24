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

namespace Mimmi20Test\TestPhpstan;

use Mimmi20\TestPhpstan\ConfigProvider;
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress RedundantCondition
 * @psalm-suppress RedundantConditionGivenDocblockType
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class ConfigProviderTest extends TestCase
{
    private ConfigProvider $provider;

    /**
     * @throws void
     *
     * @psalm-suppress ReservedWord
     */
    protected function setUp(): void
    {
        $this->provider = new ConfigProvider();
    }

    /** @throws Exception */
    public function testGetDependencyConfig(): void
    {
        $dependencyConfig = $this->provider->getDependencyConfig();
        self::assertIsArray($dependencyConfig);
        self::assertCount(1, $dependencyConfig);

        self::assertArrayNotHasKey('delegators', $dependencyConfig);
        self::assertArrayNotHasKey('initializers', $dependencyConfig);
        self::assertArrayNotHasKey('invokables', $dependencyConfig);
        self::assertArrayNotHasKey('services', $dependencyConfig);
        self::assertArrayNotHasKey('shared', $dependencyConfig);
        self::assertArrayNotHasKey('abstract_factories', $dependencyConfig);
        self::assertArrayNotHasKey('aliases', $dependencyConfig);

        self::assertArrayHasKey('factories', $dependencyConfig);
        $factories = $dependencyConfig['factories'];
        self::assertIsArray($factories);
        self::assertCount(1, $factories);
        self::assertArrayHasKey('a', $factories);
    }

    /** @throws Exception */
    public function testInvocationReturnsArrayWithDependencies(): void
    {
        $config = ($this->provider)();

        self::assertIsArray($config);
        self::assertCount(1, $config);
        self::assertArrayHasKey('dependencies', $config);

        $dependencyConfig = $config['dependencies'];
        self::assertIsArray($dependencyConfig);
        self::assertCount(1, $dependencyConfig);

        self::assertArrayNotHasKey('delegators', $dependencyConfig);
        self::assertArrayNotHasKey('initializers', $dependencyConfig);
        self::assertArrayNotHasKey('invokables', $dependencyConfig);
        self::assertArrayNotHasKey('services', $dependencyConfig);
        self::assertArrayNotHasKey('shared', $dependencyConfig);
        self::assertArrayNotHasKey('abstract_factories', $dependencyConfig);
        self::assertArrayNotHasKey('aliases', $dependencyConfig);

        self::assertArrayHasKey('factories', $dependencyConfig);
        $factories = $dependencyConfig['factories'];
        self::assertIsArray($factories);
        self::assertCount(1, $factories);
        self::assertArrayHasKey('a', $factories);
    }

    /** @throws Exception */
    public function testInvocationReturnsArrayWithDependencies2(): void
    {
        $config = ($this->provider)();

        self::assertIsArray($config);
        self::assertCount(1, $config);
        self::assertArrayHasKey('dependencies', $config);

        $dependencyConfig = $config['dependencies'];
        self::assertIsArray($dependencyConfig);
        self::assertCount(1, $dependencyConfig);

        self::assertArrayNotHasKey('delegators', $dependencyConfig);
        self::assertArrayNotHasKey('initializers', $dependencyConfig);
        self::assertArrayNotHasKey('invokables', $dependencyConfig);
        self::assertArrayNotHasKey('services', $dependencyConfig);
        self::assertArrayNotHasKey('shared', $dependencyConfig);
        self::assertArrayNotHasKey('abstract_factories', $dependencyConfig);
        self::assertArrayNotHasKey('aliases', $dependencyConfig);

        self::assertArrayHasKey('factories', $dependencyConfig);
        $factories = $dependencyConfig['factories'];
        self::assertIsArray($factories);
        self::assertCount(1, $factories);
        self::assertArrayHasKey('a', $factories);
    }
}
