<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessPhoneToUID;

class ProcessPhoneToUIDController extends Controller
{
    public function run(Request $request)
    {
        $phone = '0352989018';
        ProcessPhoneToUID::dispatch($phone)->onQueue('processing');

        return response()->json([
            'message' => 'Dispatched'
        ]);
    }
}
