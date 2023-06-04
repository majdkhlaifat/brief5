<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;
class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::all();

        return view('home.single', compact('comments'));
    }

    public function store(Request $request,$id)
    {
        
        $request->validate([
            'comment' => '',
        ]);
        
        $comments=new Comment();
        $comments->comment=strip_tags($request->input('comment')) ;
        $comments->star=$request->input('rating');
        $comments->user_id = Session::get('user_id');
        $comments->house_id=$id;
        $comments->save();
        return redirect()->back()->with('success', 'Comment added successfully');

    }

    public function create()
    {
        
    }

    public function show($id)
    {
    
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
}
