<?php

namespace Mgcodeur\LaravelCategorizable\Models;

use Illuminate\Database\Eloquent\Model;

use function Mgcodeur\LaravelCategorizable\getBuilderClass;

class Category extends Model
{
    protected $guarded = [];

    public function __construct(array $attributes = [])
    {
        $this->setTable(config('model-category.table.categories', 'categories'));

        parent::__construct($attributes);
    }

    public function categorizable()
    {
        return $this->morphTo();
    }

    public function newEloquentBuilder($query)
    {
        $builderClass = getBuilderClass();

        return new $builderClass($query);
    }
}
