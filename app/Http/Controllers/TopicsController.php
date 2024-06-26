<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Services\TopicsService;
class TopicsController extends Controller
{
    private TopicsService $TopicsService;
    public function __construct()
    {
        $this->TopicsService = new TopicsService();
    }

    public function getTopics(): JsonResponse
    {
        return response()->json([
            "response"=> $this->TopicsService->getTopics(),
            "status" => 200
        ]);
    }

    public function getTopicByID(Int $topicID): JsonResponse
    {
        return response()->json([
            "response"=> $this->TopicsService->getTopicByID($topicID),
            "status" => 200
        ]);
    }
}
