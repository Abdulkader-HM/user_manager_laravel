<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result = null, $message = null, $status = null)
    {
        $response = [
            'status' => true,
            'message' => $message,
            'data' => $result
        ];
        return response()->json($response);
    }

    public function sendError($error = null, $errorMessage = [])
    {
        $response = [
            'success' => false,
            'data' => $error,
        ];
        if (!empty($errorMessage)) {
            $response['data'] = $errorMessage;
        }
        return response()->json($response);
    }
}
