<?php

namespace SlmQueue\Job;

use Zend\ServiceManager\AbstractPluginManager;

class JobManager extends AbstractPluginManager
{
    /**
     * {@inheritDoc}
     */
    protected $shareByDefault = false;

    /**
     * {@inheritDoc}
     */
    protected $autoAddInvokableClass = false;

    /**
     * @param  mixed $plugin
     * @return bool|void
     */
    public function validatePlugin($plugin)
    {
        return $plugin instanceof JobInterface;
    }
}