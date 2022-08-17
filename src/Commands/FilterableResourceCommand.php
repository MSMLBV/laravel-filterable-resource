<?php

namespace MSML\FilterableResource\Commands;

use Illuminate\Console\Command;

class FilterableResourceCommand extends Command
{
    public $signature = 'laravel-filterable-resource';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
