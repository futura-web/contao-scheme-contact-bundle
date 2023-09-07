<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Futuraweb\ContaoSchemeContactBundle\Tests;

use Contao\SkeletonBundle\ContaoSkeletonBundle;
use PHPUnit\Framework\TestCase;

class ContaoSchemeContactBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoSchemeContactBundle();

        $this->assertInstanceOf('Futuraweb\ContaoSchemeContactBundle\ContaoSchemeContactBundle', $bundle);
    }
}
