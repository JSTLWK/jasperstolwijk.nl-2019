<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\PortfolioContactEmail;
use App\Mail\PortfolioContactUser;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Project[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index(Request $request)
    {

        if ($tags = $request->input('tags')) {

            $projects_array = [];

            $tags = explode(",", $tags);

            foreach ($tags as $tag) {

                $tag = strtolower($tag);

                $projects = Project::where('tags', 'like', "%{$tag}%")->get();

                for ($i = 0; $i < count($projects); $i++) {
                    $projects_array[] = $projects[$i];
                }
            }


            return response()->json($projects_array);
        }

        if ($title = $request->input('title')) {

            $projects_array = [];

            $title = explode(",", $title);

            foreach ($title as $tag) {
                $projects = Project::where('title', 'like', "{$tag}%")->get();

                for ($i = 0; $i < count($projects); $i++) {
                    $projects_array[] = $projects[$i];
                }
            }


            return response()->json($projects_array);
        }


        return Project::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendEmail(Request $request)
    {

        $request->validate([
            'name'    => 'string|required',
            'email'   => 'email|required',
            'message' => 'string|required',
        ]);

        $data = $request->all();

        Mail::to($data['email'])->send(new PortfolioContactEmail($data));
        Mail::to('jasperstolwijk@icloud.com')->send(new PortfolioContactUser($data));


        return response()->json(['success' => true]);
    }
}
