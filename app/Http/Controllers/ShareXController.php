<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ShareXController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return redirect('/sharex/dashboard');
        }

        return view('sharex.login');
    }

    public function gallery()
    {
        if (Auth::check()) {
            $user   = Auth::user();
            $domain = $user->domain;

            $images = DB::table('sharex_screenshots')
                        ->where('domain', $domain)
                        ->orderBy('id', 'desc')
                        ->get();

            return view('sharex.dashboard.gallery')->with(['images' => $images, 'domain' => $domain]);
        }

        return redirect('/sharex/login');
    }

    public function adminIndex()
    {
        return view('sharex.admin.dashboard');
    }


    public function index()
    {
        if (Auth::check()) {

            $user   = Auth::user();
            $domain = $user->domain;

            $stats = DB::table('statistics')->where('name', "screenshots-{$domain}")->first();

            $screenshots = DB::table('sharex_screenshots')
                             ->where('domain', $domain)
                             ->orderBy('id', 'desc')
                             ->take('10')
                             ->get();

            $news = DB::table('sharex_news')->orderBy('id', 'desc')->take('5')->get();

            return view('sharex.dashboard')->with([
                'stats'       => $stats,
                'domain'      => $domain,
                'news'        => $news,
                'screenshots' => $screenshots,
            ]);
        }

        return redirect('/sharex/login');
    }

    public function docs()
    {
        if (Auth::check()) {
            return view('sharex.dashboard.docs');
        }

        return redirect('/sharex/login');
    }

    public function deleteImage($domain, $id)
    {
        if (Auth::check()) {
            $file = DB::table('sharex_screenshots')->where('id', $id)->first();

            $filename = "/ss/{$file->image_name}";
            unlink(public_path($filename));

            DB::table('sharex_screenshots')->delete($id);

            return redirect(route('sharex.gallery'));
        }

        return redirect(route('sharex.login'));

    }


    public function loginCheck(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $email    = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/sharex/dashboard');
        }

        return view('sharex.login');
    }

    public function register(Request $request)
    {

        $token = $request->input('token');

        if (! $token) {
            return view('sharex.register')->with([
                'access' => false,
            ]);
        }

        $db = DB::table('sharex_register')->where('token', $token);

        if ($db->first()) {

            return view('sharex.register')->with([
                'access' => true,
                'token'  => $token,
            ]);
        }

        return view('sharex.register')->with([
            'access' => false,
        ]);
    }

    public function createRegister(Request $request)
    {
        $request->validate([
            'email'    => 'required|unique:App\User,email|email',
            'password' => 'required',
            'domain'   => 'required',
            'token'    => 'required',
        ]);

        $email    = $request->input('email');
        $password = $request->input('password');
        $domain   = $request->input('domain');
        $token    = $request->input('token');

        $api_key = Str::random(60);
        $date    = Carbon::now()->toDateString();

        $user = User::create([
            'email'             => $email,
            'email_verified_at' => $date,
            'password'          => Hash::make($password),
            'domain'            => $domain,
            'api_key'           => $api_key,
        ]);

        if ($user) {

            DB::table('sharex_register')->where('token', $token)->delete();

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect('/sharex/dashboard');
            }

            return redirect('/sharex/dashboard');
        }

    }
}
