<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class studentsController extends Controller
{
    function get($id="all"){
        if($id=="all"){
            $data = Post::all();
        }else{
            $data = Post::find($id);
        }
        return json_encode($data);
    }
    function post(Request $request){
        $postBody = json_decode($request->getContent(),true);
        $add = Post::create($postBody);
        return 'done';
    }
    function update($id){  
        $data = Post::find($id);
        $postBody = json_decode(request()->getContent(),true);
        $data->update($postBody);
        return 'updated';
    }
    function delete($id){
        $data = Post::find($id);
        $data->delete();
        return "deleted";
    }
}
