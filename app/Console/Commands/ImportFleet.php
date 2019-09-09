<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportFleet extends Command
{
    protected $signature = 'fleet:import';

    protected $description = 'Import vehicles, makes and types from CSV file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        //
    }
}
