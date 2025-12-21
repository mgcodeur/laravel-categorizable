<?php

namespace Mgcodeur\LaravelCategorizable\Traits;

use function Mgcodeur\LaravelCategorizable\getBuilderClass;
use function Mgcodeur\LaravelCategorizable\getCategorizableModel;
use function Mgcodeur\LaravelCategorizable\getMorphKeyName;

trait Categorizable
{
    public function categories()
    {
        $categoryModel = getCategorizableModel();

        return $this->morphMany($categoryModel, getMorphKeyName());
    }

    public function newEloquentBuilder($query)
    {
        $builderClass = getBuilderClass();

        return new $builderClass($query);
    }
}
