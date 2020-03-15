<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MinecraftController extends Controller
{
    public function show(Request $request, $username)
    {
        $username = strtolower($username);

        $array = self::getArray($username);

        return response()->json($array);

    }

    public function showImage(Request $request, $username)
    {
        $array            = self::getArray($username);
        $text             = $array["text"] .
                            " {$array['years']} years or {$array['months']} months or {$array['days']} days";
        $string           = $text;
        $font             = 3;
        $width            = ImageFontWidth($font) * strlen($string);
        $height           = ImageFontHeight($font);
        $im               = imagecreate($width, $height);
        $background_color = imagecolorallocate($im, 255, 255, 255); //white background
        $text_color       = imagecolorallocate($im, 0, 0, 0);//black text
        imagestring($im, $font, 0, 0, $string, $text_color);
        ob_start();
        imagepng($im);
        $imstr = base64_encode(ob_get_clean());
        imagedestroy($im);

        return view('minecraft/index', array('data' => $imstr));
    }

    public static function getArray($username)
    {
        $now = Carbon::now();

        $time = NULL;

        $username === "hoopless" ? $time = "03-03-2018" : NULL;
        $username === "kamerplant" ? $time = "03-11-2018" : NULL;
        $username === "carcroft" ? $time = "03-03-2018" : NULL;
        $username === "kualdir" ? $time = "17-02-2018" : NULL;
        $username === "okexox" ? $time = "06-10-2017" : NULL;

        if ($time) {
            $time = Carbon::parse($time);

            $years  = $time->diffInYears($now);
            $months = $time->diffInMonths($now);
            $days   = $time->diffInDays($now);

            return $array = [
                'text'   => "{$username} has been a helper for",
                'years'  => $years,
                'months' => $months,
                'days'   => $days,
            ];
        }

    }
}
