<?php

namespace :uc:vendor\:uc:package\Providers;

use JackJack\Framework\Providers\ModuleServiceProvider;

class :uc:packageServiceProvider extends ModuleServiceProvider

    /**
     * @var null|string
     */
    protected ?string $moduleName = ':uc:vendor/:uc:package';

    /**
     * @var null|string
     */
    protected ?string $moduleNameLower = ':lc:vendor/:lc:package';

    /**
     * @var string|null Event service provider class
     */
    protected ?string $eventServiceProviderClass = null;
}
