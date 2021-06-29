<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        // return Post::all();
        return Post::orderBy('created_at', 'desc')->paginate(100);
    }

    public function store(Request $request)
    {
        // For creating a new record (post)

        try {
            $post = new Post();
            $post->name = $request->name;
            $post->age = $request->age;
            $post->dob = $request->dob;
            $post->aadhar = $request->aadhar;
            $post->address = $request->address;
            $post->result = $request->result;
            if ($post->save()) {
                return response()->json(['status' => 'success', 'message' => 'Post created successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        // For Updating a record(post)

        try {
            $post = Post::findOrFail($id);
            $post->name = $request->name;
            $post->age = $request->age;
            $post->dob = $request->dob;
            $post->aadhar = $request->aadhar;
            $post->address = $request->address;
            $post->result = $request->result;
            if ($post->save()) {
                return response()->json(['status' => 'success', 'message' => 'Post updated successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
        
    }

    public function destroy($id)
    {
        // For Deleting a post
        try {
            $post = Post::findOrFail($id);
            if ($post->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Post deleted successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
