<?php

namespace Modules\HomeModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\HomeModule\Entities\Post;
class PostsController extends Controller
{
    
    public function create(Request $request){
        $post = new Post();
        $post->Title = $request->Title;
        $post->Content = $request->Content;
        $post->Path = $request->Path;
        $post->Author = $request->Author;
        $post->save();
        return response()->json([
            'status' =>true,
            'code'   =>Response::HTTP_CREATED,
            'title'  => $post
        ]);
    }
    public function getAllPost()
    {
        
        $post = Post::all();
        return response()->json([
            'status' =>true,
            'code'   =>Response::HTTP_OK,
            'post'   =>$post
        ]);
        
    }
    public function getById($id){
        $post = Post::find($id);
        return response()->json([
            'status' =>true,
            'code'   =>Response::HTTP_OK,
            'title'  => $post
        ]);
    }
    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        // return response()->json([
        //     'status' =>true,
        //     'code'   =>Response::HTTP_OK,
        //     'title'  => $post
        // ]);
    }

}
