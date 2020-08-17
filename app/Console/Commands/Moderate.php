<?php

namespace App\Console\Commands;

use App\Guest;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class Moderate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'moderate:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'moderate user messages';

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
    public function handle()
    {
        //
        $messages=Guest::where('status','NEW')->get();
        foreach ($messages as $message) {
            $contains = Str::contains($message->guest_message, 'baddd');
            if($contains){
                $message->status='REJECTED';
            }else{
                $message->status='ACCEPTED';
            }
            $message->update();
        }
        $this->info('Moderation process run successfully.');
    }
}
