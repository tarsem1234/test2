<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
Use Validator;

class CommentController extends Controller
{

    public function storeComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
                    'blog_id' => 'required|exists:blogs,id,deleted_at,NULL',
                    'comment' => 'required|min:50',
                        ], [
                    'blog_id' => 'Invalid Blog.',
                    'comment.required' => 'Comment is required.',
                    'comment.min' => 'Blog posts require a minimum of fifty characters.',
                        ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        $comment = new Comment;
        $comment->user_id = Auth::id();
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comment;

        if ($comment->save()) {

            return redirect()->back()->with('flash_success', 'Comment added successfully.');
        }
        return redirect()->back()->with('flash_warning', 'failed to add comment.');
    }

}
