<?php namespace Transorder\Console\Commands;

use Illuminate\Console\Command;

class RecreateDatabase extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'db:recreate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Recreate current database.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        if (!$this->confirm('Do you wish to continue? [yes|no]', false)) {
            return;
        }
        $databaseName = \Config::get('database.connections.mysql.database');
        \DB::statement('DROP DATABASE ' . $databaseName);
        \DB::statement('CREATE DATABASE ' . $databaseName);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
        ];
    }

}
