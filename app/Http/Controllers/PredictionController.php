<?php

namespace App\Http\Controllers;

use App\Models\Prediction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PredictionController extends Controller
{
    public function index(Request $request)
    {
        $prediction =  Prediction::create($request->all());
        return response()->json([
            'message' => 'Created Successfully',
            'status' => Response::HTTP_CREATED,
            'data' => $prediction
        ]);
    }
}
