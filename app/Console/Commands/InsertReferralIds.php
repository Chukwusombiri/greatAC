<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InsertReferralIds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refIds:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert referral ids for already existings users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = \App\Models\User::where('referralId','=',null)->get();
        if($users){
            foreach ($users as $user) {
                $user->referralId = substr(config('app.name'),0,2). rand(111111111,99999999);
                $user->save();
            }
            return $this->info('Referral IDs inserted successfully');
        }        
        return $this->info('No user was found');
    }
}
