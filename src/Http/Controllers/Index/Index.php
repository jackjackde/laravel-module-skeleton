<?php

declare(strict_types=1);

namespace :uc:vendor\:uc:package\Http\Controllers\Index;

use Illuminate\Http\Request;
use JackJack\Framework\Attributes\RouteAttributes\Get;
use JackJack\Framework\Attributes\RouteAttributes\Prefix;
use JackJack\Framework\Http\Controllers\Controller;
use JackJack\Modules\Modules;
use JackJackVendor\AuthPackage\AuthPackage;

#[Prefix(':lc:package')]
class Index extends Controller
{
    public const string ROUTE_NAME = ':lc:package.index.index';

    #[Get('/', name: self::ROUTE_NAME)]
    public function __invoke()
    {
        dd();
    }
}
