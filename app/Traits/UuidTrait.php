<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
//    /** @var bool */
//    public $incrementing = false;
//
//    /** @var string */
//    protected $keyType = 'string';
//
//    /** @var string */
//    protected $primaryKey = 'uuid';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: (string)Str::orderedUuid();
        });
    }
}