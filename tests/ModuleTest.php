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

use Mimmi20\TestPhpstan\Module;
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress RedundantCondition
 * @psalm-suppress RedundantConditionGivenDocblockType
 */
final class ModuleTest extends TestCase
{
    /** @throws Exception */
    public function testGetConfig(): void
    {
        $module = new Module();

        $config = $module->getConfig();

        self::assertIsArray($config);
        self::assertCount(1, $config);
        self::assertArrayHasKey('service_manager', $config);
    }
}
