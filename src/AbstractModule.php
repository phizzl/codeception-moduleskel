<?php

namespace Phizzl\Codeception\Modules;

use Codeception\Module;

/**
 * @mixin \AcceptanceTester
 */
abstract class AbstractModule extends Module
{
    use CallCrossModuleMethodsTrait;
}