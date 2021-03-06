<?php

/**
 * Copyright 2015, Eduardo Trujillo <ed@chromabits.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Illuminated package
 */

namespace Chromabits\Illuminated\Jobs\Interfaces;

use Chromabits\Illuminated\Jobs\Exceptions\UnresolvableException;
use Chromabits\Illuminated\Jobs\Job;
use Chromabits\Illuminated\Jobs\Tasks\BaseTask;

/**
 * Interface HandlerResolverInterface.
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Illuminated\Jobs\Interfaces
 */
interface HandlerResolverInterface
{
    /**
     * Attempt to resolve the task handler for a job.
     *
     * @param Job $job
     *
     * @throws UnresolvableException
     * @return BaseTask
     */
    public function resolve(Job $job);

    /**
     * Get a list of available tasks.
     *
     * @return array
     */
    public function getAvailableTasks();

    /**
     * Create an instance of the handler for the provided task.
     *
     * @param string $task
     *
     * @throws UnresolvableException
     * @return BaseTask
     */
    public function instantiate($task);
}
