<?php

namespace App\Services;

use Exception;
use App\Helpers\DateTimeHelper;
use App\Models\Emails;
class EmailsService
{
    public function getEmailsByTopic(Int $topicID): Array
    {
        return [];
    }

    public function dispatchEmail(Array $email): Bool
    {
        return true;
    }
}
