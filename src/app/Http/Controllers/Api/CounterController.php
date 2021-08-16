<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class CounterController extends Controller
{
    public function increment()
    {
        $value = Redis::eval(<<<'LUA'
            return redis.call("incr", KEYS[1])
        LUA, 1, 'banner_counter');

        return response()->json([
            "status" => "ok",
            "counter" => $value
        ]);
    }

    public function getCounter()
    {
        $value = Redis::get("banner_counter");

        return response()->json([
            "status" => "ok",
            "counter" => $value
        ]);
    }
}
