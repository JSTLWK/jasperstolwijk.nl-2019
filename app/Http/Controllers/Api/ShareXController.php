<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ShareXController extends Controller
{
    public function create(Request $request)
    {

        $request->validate([
            'email'   => 'required|email',
            'api_key' => 'required',
        ]);

        $email   = $request->input('email');
        $api_key = $request->input('api_key');

        $checkUser = DB::table('users')->where('api_key', $api_key)->where('email', $email)->first();

        if ($checkUser) {

            $destinationPath = 'ss';
            $domain          = $request->getHost();
            $file            = $request->file('sharex');
            $random_string   = Str::random(5);
            $now             = Carbon::now();

            $filename = $random_string . "." . $file->extension();

            $file->move($destinationPath, $filename);

            $url = url('/ss/' . $filename);

            DB::table('sharex_screenshots')->insert([
                'domain'     => $domain,
                'image_name' => $filename,
                'url'        => $url,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            if (DB::table('statistics')->where('name', "screenshots-{$domain}")->first()) {
                DB::table('statistics')->where('name', "screenshots-{$domain}")->increment('amount');
            } else {
                DB::table('statistics')->insert(
                    ['name' => "screenshots-{$domain}", 'amount' => 1]
                );
            }

            return $url;
        }

        return response()->json(['message' => 'incorrect email or API KEY']);

    }

    public function latestNews()
    {
        $latest_news = DB::table('sharex_news')->orderBy('id', 'desc')->take('5')->get();

        return response()->json($latest_news);
    }

    public function showScreenshots($domain)
    {
        $screenshots = DB::table('statistics')->where('name', "screenshots-{$domain}")->first();

        if ($screenshots) {

            $array = [
                'screenshots_made' => $screenshots->amount,
                'domain'           => "https://{$domain}",
            ];

            return response()->json($array);
        }

        return response()->json(['message' => 'Incorrect domain selected, no data gathered.']);


    }

    public function generateToken()
    {

        $date  = Carbon::now();
        $token = Str::random(200);
        $url   = route('sharex.register') . "?token=$token";

        DB::table('sharex_register')->insert([
            'token'      => $token,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        $data = [
            'token' => $token,
            'url'   => $url,
        ];

        return response()->json($data);
    }
}
