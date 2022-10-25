<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->id) {
            $id = $request->id;
            $data = News::firstWhere("id", $id);
            return Response([
                "id" => $data->id,
                "title" => $data->title,
                "body" => $data->body
            ], 200);
        }
        return Response("Bad Request", 400);
    }
    public function panel_admin(Request $request)
    {
        $news = News::all();
        return view("panel_admin", ["title" => "Admin", "news" => $news]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:80',
            'description' => 'required|string',
            'body' => 'required|string'
        ]);
        if ($request->file("thumbnail")) {
            $file = $request->file("thumbnail")->store("/", ["disk" => "public_uploads"]);
        } else {
            $file = "/";
        }
        $validatedData["image_path"] = $file;
        // ddd($validatedData);
        News::create($validatedData);
        return redirect("/WWWWWWWDaspaodawdksfasjdebfh/dawodjasd");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
    }
}
