<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ZeroPerMonInt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zero:interest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Zero monthly interest at the start of every month.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::where('perMonRoi','>',0)->get();

        if($users->isEmpty()){
            return $this->info('There are no records that neeeds zeroing perMonInt');
        }        

        foreach ($users as  $user) {
            $user->perMonRoi = 0;
            $user->save();
        }

        return $this->info('Successfully zeroed perMonInt');
    }
}
