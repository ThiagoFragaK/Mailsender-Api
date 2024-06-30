<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;

    public function getByTopic($query, $topicID)
    {
        return $query->where("topic_id", $topicID)->get();
    }
}
