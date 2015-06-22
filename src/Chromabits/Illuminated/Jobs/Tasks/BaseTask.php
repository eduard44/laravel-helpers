<?php

namespace Chromabits\Illuminated\Jobs\Tasks;

use Chromabits\Illuminated\Jobs\Job;

/**
 * Class BaseTask
 *
 * A base class for a task.
 *
 * @author Eduardo Trujillo <ed@chromabits.com>
 * @package Chromabits\Illuminated\Jobs\Tasks
 */
abstract class BaseTask
{
    /**
     * Description of the task.
     *
     * @var string
     */
    protected $description = 'No description available';

    /**
     * Process a job.
     *
     * Note: A handler implementation does not need to worry about exception
     * handling and retries. All this is automatically managed by the task
     * runner.
     *
     * @param Job $job
     */
    abstract public function fire(Job $job);

    /**
     * Get a simple array mapping accepted data keys with a description for
     * providing a barebones help section.
     *
     * @return array
     */
    public function getReference()
    {
        return [];
    }

    /**
     * Get the type of each field.
     *
     * @return array
     */
    public function getTypes()
    {
        return [];
    }

    /**
     * Get the default value of each field.
     *
     * @return array
     */
    public function getDefaults()
    {
        return [];
    }

    /**
     * Get the task description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}