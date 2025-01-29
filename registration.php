<?php

declare(strict_types=1);

/**
 * Register the module.
 */
\JackJack\Modules\ModuleRegistrar::register(
    \JackJack\Modules\ModuleRegistrar::MODULE,
    ':uc:vendor/:uc:package',
    __DIR__
);
