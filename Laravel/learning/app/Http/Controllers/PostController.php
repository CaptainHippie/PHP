<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class PostController extends Controller
{
    //
    public function addPost(){
        return view('addpost');
    }
    public function savePost(Request $request){
        FacadesDB::table('posts')->insert([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return back()->with('post_add', 'post added successfully');
    }
    public function postList(){
        $posts=FacadesDB::table('posts')->get();
        return view('postlist', compact('posts'));
    }
    public function editPost($id){
        $post=FacadesDB::table('posts')->where('id',$id)->first();
        return view('editpost', compact('post'));
    }
    public function updatePost(Request $request){
        FacadesDB::table('posts')->where('id', $request->id)->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return back()->with('post_update', 'post updated successfully');
    }
    public function deletePost($id){
        FacadesDB::table('posts')->where('id', $id)->delete();
        return back()->with('post_delete', 'post deleted successfully');
    }
}













