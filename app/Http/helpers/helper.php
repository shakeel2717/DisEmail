<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

function location($type)
{
    $ip = \request()->ip();
    return Cache::remember('ip' . $ip . $type, 60 * 60 * 2, function () use ($ip, $type) {
        if ($type == "ip") {
            return $ip;
        }
        $data = Http::get("http://www.geoplugin.net/json.gp?ip=" . $ip);
        if (isset($data[$type])) {
            return $data[$type];
        } else {
            return "Unknown";
        }
    });
}
