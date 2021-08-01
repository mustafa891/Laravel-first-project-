<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;

class AddRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add role for Db';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('What is role name :');
        if ($this->confirm('You went make role '. $name)) {
            Role::create([
              'name' => $name
            ]);
             info("You created ".$name);
        }
        info("Role ".$name ." Not created");
    }
}
