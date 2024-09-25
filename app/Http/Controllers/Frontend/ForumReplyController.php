<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ForumReply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ForumReplyController extends Controller
{
    public function saveForumReply(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'forum_reply' => 'required',
        ]);

        $input = $request->all();
        $forumReply = new ForumReply;
        $forumReply->user_id = Auth::id();
        $forumReply->forum_id = $input['forum_id'];
        $forumReply->reply = $input['forum_reply'];
        $forumReply->save();

        return redirect()->back();
    }

    public function replyCreate(Request $request): View
    {
        return view('frontend.forum.create');
    }
}
