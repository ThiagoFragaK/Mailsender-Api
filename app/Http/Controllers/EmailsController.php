<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\EmailsService;
class EmailsController extends Controller
{
    private EmailsService $EmailsService;
    public function __construct()
    {
        $this->EmailsService = new EmailsService();
    }

    public function getEmailsByTopic(Request $request): JsonResponse
    {
        return response()->json([
            "response"=> $this->EmailsService->getEmailsByTopic($request->get('topic_id')),
            "status" => 200
        ]);
    }

    public function dispatchEmail(Request $request): JsonResponse
    {
        $email = [];
        $response = $this->EmailsService->dispatchEmail($email);
        return response()->json([
            "response"=> $response,
            "status" => 200
        ]);
    }
}
