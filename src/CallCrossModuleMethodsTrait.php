<?php


namespace Phizzl\Codeception\Modules;


use Codeception\Exception\ModuleException;
use Codeception\Lib\ModuleContainer;
use Codeception\Module;

/**
 * @mixin Module
 */
trait CallCrossModuleMethodsTrait
{
    /**
     * @var ModuleContainer
     */
    protected $moduleContainer;

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     * @throws ModuleException
     */
    public function __call($name, $arguments)
    {
        if(!$module = $this->moduleContainer->moduleForAction($name)){
            throw new ModuleException($this, "Unknown method \"$name\"");
        }

        return call_user_func_array([$module, $name], $arguments);
    }
}