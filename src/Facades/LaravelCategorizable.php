<?php

namespace Mgcodeur\LaravelCategorizable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mgcodeur\LaravelCategorizable\LaravelCategorizable
 */
class LaravelCategorizable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mgcodeur\LaravelCategorizable\LaravelCategorizable::class;
    }
}
