<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 * @copyright ©2009-2015
 */
use Spiral\Components\ORM\ActiveRecord;

return [
    'documentation' => directory('runtime') . '/ormClasses.php',
    'mutators'      => [
        'timestamp'  => ['accessor' => 'Spiral\Components\ORM\Accessors\Timestamp'],
        'datetime'   => ['accessor' => 'Spiral\Components\ORM\Accessors\Timestamp'],
        'php:int'    => ['setter' => 'intval'],
        'php:float'  => ['setter' => 'floatval'],
        'php:string' => ['setter' => 'string'],
        'php:bool'   => ['setter' => 'boolean']
    ],
    'relations'     => [
        ActiveRecord::BELONGS_TO         => [
            'class'  => 'Spiral\Components\ORM\Relations\HasOne',
            'schema' => 'Spiral\Components\ORM\Schemas\Relations\BelongsToSchema',
            'loader' => 'Spiral\Components\ORM\Selector\Loaders\HasOneLoader'
        ],
        ActiveRecord::BELONGS_TO_MORPHED => [
            'class'  => 'Spiral\Components\ORM\Relations\HasOne',
            'schema' => 'Spiral\Components\ORM\Schemas\Relations\BelongsToMorphedSchema',
            'loader' => 'Spiral\Components\ORM\Selector\Loaders\HasOneLoader'
        ],
        ActiveRecord::HAS_ONE            => [
            'class'  => 'Spiral\Components\ORM\Relations\HasOne',
            'schema' => 'Spiral\Components\ORM\Schemas\Relations\HasOneSchema',
            'loader' => 'Spiral\Components\ORM\Selector\Loaders\HasOneLoader'
        ],
        ActiveRecord::HAS_MANY           => [
            'class'  => 'Spiral\Components\ORM\Relations\HasOne',
            'schema' => 'Spiral\Components\ORM\Schemas\Relations\HasManySchema',
            'loader' => 'Spiral\Components\ORM\Selector\Loaders\HasOneLoader'
        ],
        ActiveRecord::MANY_TO_MANY       => [
            'class'  => 'Spiral\Components\ORM\Relations\HasOne',
            'schema' => 'Spiral\Components\ORM\Schemas\Relations\ManyToManySchema',
            'loader' => 'Spiral\Components\ORM\Selector\Loaders\HasOneLoader'
        ],
        ActiveRecord::MANY_TO_MORPHED    => [
            'class'  => 'Spiral\Components\ORM\Relations\HasOne',
            'schema' => 'Spiral\Components\ORM\Schemas\Relations\ManyToMorphedSchema',
            'loader' => 'Spiral\Components\ORM\Selector\Loaders\HasOneLoader'
        ],
        ActiveRecord::MANY_THOUGHT       => [
            'class'  => 'Spiral\Components\ORM\Relations\HasOne',
            'schema' => 'Spiral\Components\ORM\Schemas\Relations\ManyThoughtSchema',
            'loader' => 'Spiral\Components\ORM\Selector\Loaders\HasOneLoader'
        ],
    ]
];