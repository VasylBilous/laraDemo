<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function Index(Request $request)
    {
        //getting data from db
        $tags = Tag::query()->get();
        $posts = Post::query()->get();
        //return data to index view
        return view('index',['tags'=>$tags, 'posts'=> $posts]);
    }
    public function  AddPost(Request $request)
    {
        //getting data from db
        $categories=Category::query()->get();
        $tags=Tag::query()->get();
        //return data to addPost view
        return view('addPost',['categories'=>$categories,'tags'=>$tags]);
    }

    public function  ShowPost($id)
    {
        //getting post with specified id
        $post=Post::query()->find($id);
        //return find post data to ShowPost view
        return view('showPost',['post'=>$post]);
    }

    public function UploadImage(Request $request)
    {
        //uploading image with validations by type and extension
        if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {

                $extension = $request->file->extension();
                $name = sha1(microtime()) . "." . $extension;
                $request->file('file')->storeAs('/public', $name);
                $url = Storage::url($name);
                return response()->json(['link' => $url]);
            }
        }
    }


}
