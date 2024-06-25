<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\EmailsServices;
class EmailsController extends Controller
{
    private EmailsServices $EmailsServices;
    public function __construct()
    {
        $this->EmailsServices = new EmailsServices();
    }

    public function getEmailsByTopic(Request $request): JsonResponse
    {
        return response()->json();
    }

    public function dispatchEmail(Request $request): JsonResponse
    {
        return response()->json();
    }
}
