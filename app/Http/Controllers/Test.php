<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Response;

class Test extends Controller
{
    public function test1()
    {
        return response()->json([
            'page' => '1'
        ]);
    }
    public function test2()
    {
        return response()->json([
            'page' => '2'
        ]);
    }
    public function test3()
    {
        return response()->json([
            'page' => '3'
        ]);
    }
    public function test4()
    {
        return response()->json([
            'page' => '4'
        ]);
    }
}
