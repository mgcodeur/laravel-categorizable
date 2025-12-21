<?php

return [
    /*
     * The class name of the category model.
     *
     * The model must be or extend `Mgcodeur\LaravelCategorizable\Models\Category::class`.
     */
    'model' => Mgcodeur\LaravelCategorizable\Models\Category::class,

    /*
     * The name of the categories table.
     */
    'table' => [
        'categories' => 'categories',
        'model_has_categories' => 'model_has_categories',
    ],

    /*
     * The primary key type of the category model.
     * 
     * Available options: 'id', 'uuid'
     */
    'key_type' => 'id',

    /**
     * The morph key used for the categorizable relationship.
     */
    'morph_key' => 'categorizable',

    /*
     * The class name of the custom category builder.
     * 
     * The builder must be or extend `Mgcodeur\LaravelCategorizable\Builders\CategoryBuilder::class`.
     */
    'builder_class' => Mgcodeur\LaravelCategorizable\Builders\CategoryBuilder::class,
];
