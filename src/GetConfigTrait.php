<?php


namespace Phizzl\Codeception\Modules;

use Codeception\Module;

/**
 * @mixin Module
 * @property array $config
 */
trait GetConfigTrait
{
    /**
     * @param string $key
     * @return mixed|null
     */
    public function getConfig($key)
    {
        return isset($this->config[$key]) ? $this->config[$key] : null;
    }
}