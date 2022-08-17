<?php

namespace MSML\FilterableResource\Traits;

trait ResourceFilterable
{
    /**
     * Fields to filter out of the resource.
     *
     * @param  array  $array
     * @param  array  $fields
     * @return array
     */
    protected function fields(array $array, array $fields): array
    {
        return collect($array)
            ->when(count($fields), fn ($collection) => $collection->only($fields))
            ->toArray();
    }
}
