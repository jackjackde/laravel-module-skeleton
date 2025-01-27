<?php

declare(strict_types=1);

/**
 * Register the module.
 */
\JackJack\Framework\Modules\ModuleRegistrar::register(
    \JackJack\Framework\Modules\ComponentRegistrar::MODULE,
    ':uc:vendor/:uc:package',
    __DIR__
);
