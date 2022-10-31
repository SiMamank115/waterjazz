<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class newsController extends Controller
{
    private $admin_route = "/been/spending/most/their/life/livin/in/the/gangsta/paradise";
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
        foreach ($news as $v) {
            if ($v->image_path == "/") {
                $v->image_path = "/image/newspaper-" . random_int(1, 2) . ".jpg";
            }
        }
        // if(old("title")) ddd($request->old("title"));
        return view("panel_admin", ["title" => "Admin", "news" => $news]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required','string','max:80','max:64',"not_regex:/\<script\>|\<\/script\>/i"],
            'description' => ['required','string','max:128',"not_regex:/\<script\>|\<\/script\>/i"],
            'body' => ['required','string','max:2048',"not_regex:/\<script\>|\<\/script\>/i"],
            'thumbnail' => ['image','max:2048']
        ]);
        if ($request->file("thumbnail")) {
            $file = "/uploads/" . $request->file("thumbnail")->store("/", ["disk" => "public_uploads"]);
        } else {
            $file = "/";
        }
        $validatedData["image_path"] = $file;
        // ddd($validatedData);
        News::create($validatedData);
        return redirect($this->admin_route);
    }
    public function destroy($id)
    {
        if (News::find($id)->delete()) {
            return redirect($this->admin_route);
        };
    }
}
