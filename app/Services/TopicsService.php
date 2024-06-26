<?php

namespace App\Services;

use Exception;
use App\Models\Topics;
use App\Helpers\DateTimeHelper;

class TopicsService
{
    public function getTopics(): Array
    {
        $topics = Topics::get();
        return is_null($topics) ? [] : $topics->toArray();
    }

    public function getTopicByID(Int $ID): Array
    {
        $topic = Topics::find($ID);
        if(is_null($topic))
        {
            throw new Exception("Topic doesn't exist", 401);
        }

        return [
            "id" => $topic->id,
            "name" => $topic->name,
            "created_at" => DateTimeHelper::FormatDateTime($topic->created_at),
        ];
    }
}
