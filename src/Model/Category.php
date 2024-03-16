<?php

namespace Mgcodeur\LaravelCategorizable\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $guarded = [];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->name);
    }

    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('childrens');
    }
}
