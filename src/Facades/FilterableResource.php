<?php

namespace MSML\FilterableResource\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MSML\FilterableResource\FilterableResource
 */
class FilterableResource extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MSML\FilterableResource\FilterableResource::class;
    }
}
