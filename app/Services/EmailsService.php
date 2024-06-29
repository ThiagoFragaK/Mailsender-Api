<?php

namespace App\Services;

use App\Mail\ActiveMail;
use Exception;
use App\Helpers\DateTimeHelper;
use App\Models\Emails;
use Illuminate\Support\Facades\Mail;
class EmailsService
{
    public function getEmailsByTopic(Int $topicID): Array
    {
        return [];
    }

    public function saveAndDispatchEmail(Array $email): Bool
    {
        // $this->saveEmail($email);
        Mail::to(env("MAIL_HOST"), "Thiago")->send(new ActiveMail($email));
        return true;
    }

    public function saveEmail(Array $email): Void
    {
        Emails::create([
            "code" => rand(),
            "sender" => $email["sender"] ?? "sender@mail.com",
            "receiver" => $email["receiver"] ?? "receiver@mail.com",
            "status" => 0,
            "body" => $email["body"],
            "created_at" => now(),
        ]);
    }
}
