<?php

namespace Mgcodeur\LaravelCategorizable;

use Mgcodeur\LaravelCategorizable\Models\Category;
use Mgcodeur\LaravelCategorizable\Builders\CategoryBuilder;

if (!function_exists('getCategorizableModel')) {
    /**
     * Get the categorizable model class from the configuration.
     *
     * @return string
     */
    function getCategorizableModel(): string
    {
        $config = config('model-category', []);

        return $config['model'] ?? Category::class;
    }
}

if (!function_exists('getMorphKeyName')) {
    /**
     * Get the morph key name from the configuration.
     *
     * @return string
     */
    function getMorphKeyName(): string
    {
        $config = config('model-category', []);

        return $config['morph_key'] ?? 'categorizable';
    }
}

if (!function_exists('getBuilderClass')) {
    /**
     * Get the builder class from the configuration.
     *
     * @return string
     */
    function getBuilderClass(): string
    {
        $config = config('model-category', []);

        return $config['builder_class'] ?? CategoryBuilder::class;
    }
}
