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
            return response()->json([
                "error"=> "It's required to have fields 'name', 'email' and 'subject' in the request. Try again.",
                "status" => 400
            ]);
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
