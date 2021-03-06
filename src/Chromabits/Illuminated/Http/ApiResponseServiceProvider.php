<?php

/**
 * Copyright 2015, Eduardo Trujillo <ed@chromabits.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Illuminated package
 */

namespace Chromabits\Illuminated\Http;

use Chromabits\Illuminated\Http\Factories\ApiResponseFactory;
use Chromabits\Illuminated\Http\Interfaces\ApiResponseFactoryInterface;
use Chromabits\Illuminated\Support\ServiceMapProvider;

/**
 * Class ApiResponseServiceProvider.
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Illuminated\Http
 */
class ApiResponseServiceProvider extends ServiceMapProvider
{
    protected $defer = true;

    protected $map = [
        ApiResponseFactoryInterface::class => ApiResponseFactory::class,
    ];
}
