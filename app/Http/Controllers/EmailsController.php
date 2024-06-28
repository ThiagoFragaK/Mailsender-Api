<?php

namespace App\Http\Controllers;

use Exception;
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
        if(!$request->has(["name", "email", "subject"]))
        {
            $requiredParams = "name, email and subject";
            throw new Exception("It's required to have {$requiredParams} in the request. Try again.", 400);
        }

        $email = [
            "name" => $request->get('name'),
            "subject" => $request->get("subject"),
            "email" => $request->get("email"),
        ];

        $response = $this->EmailsService->dispatchEmail($email);
        return response()->json([
            "response"=> $response,
            "status" => 200
        ]);
    }
}
