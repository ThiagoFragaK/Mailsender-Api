<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Services\TopicsServices;
class TopicsController extends Controller
{
    private TopicsServices $TopicsServices;
    public function __construct()
    {
        $this->TopicsServices = new TopicsServices();
    }

    public function getTopics(): JsonResponse
    {
        return response()->json();
    }
}
