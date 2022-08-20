<?php

namespace App\Console\Commands;

use App\Mail\TestEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CheckEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = Mail::to("shakeel2717@gmail.com")->send(new TestEmail());
        if ($email) {
            echo "Email sent";
        } else {
            echo "Email Failed";
        }

        return 0;
    }
}
