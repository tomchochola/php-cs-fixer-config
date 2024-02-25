<?php

/**
 * This file is part of a software developed by Tomáš Chochola.
 *
 * Copyright © 2024+ Tomáš Chochola <chocholatom1997@gmail.com>
 *
 * For the full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code, available
 * at the root of this repository.
 *
 * GitHub Profile: https://github.com/tomchochola
 * Support & Sponsor: https://github.com/sponsors/tomchochola
 */

declare(strict_types=1);

namespace Tomchochola\PhpCsFixerConfig;

use PhpCsFixer\Finder;

class FinderFactory
{
    public static function make(): Finder
    {
        return (new Finder())
            ->ignoreVCSIgnored(true)
            ->ignoreVCS(true)
            ->ignoreDotFiles(false)
            ->notName('*.blade.php');
    }
}
