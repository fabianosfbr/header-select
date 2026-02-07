<?php

namespace Fabianosfbr\HeaderSelect\Commands;

use Illuminate\Console\Command;

class HeaderSelectCommand extends Command
{
    public $signature = 'header-select';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
