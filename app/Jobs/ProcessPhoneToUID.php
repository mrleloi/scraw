<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class ProcessPhoneToUID implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $timeout = 120;

    protected $phone, $redisConn;

    public function __construct($phone)
    {
        $this->phone = $phone;
        $this->redisConn = Redis::connection('phone-to-uid');
    }

    public function handle()
    {
        $this->redisConn->set('phone_list', json_encode([
            'phone' => $this->phone
        ]));
    }
}
