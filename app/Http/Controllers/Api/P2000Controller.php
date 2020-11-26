<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class P2000Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = $request->input('message');
        $now = Carbon::now();

        $cut_message = explode('|', $message);

        // Check of het bericht compleet is.
        if ($cut_message[2] === "1600/2/K/A") {

            // Capcode(s)
            $capcodes = explode(" ", $cut_message[4]);

            foreach($capcodes as $capcode) {
               $capcode = substr($capcode, 2);





            }

            // Melding bericht
            $cut_message[6];
        }


        $debug = 1;


        DB::table('p2000-meldingen')->insert(['alert' => $message, 'updated_at' => $now, 'created_at' => $now]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
