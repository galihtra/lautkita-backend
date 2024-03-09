<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function show(){
        $data = Campaign::all();
        return response()->json($data);
        // return response([
        //     'message' => 'API Working'
        // ], 200);
    }
}
