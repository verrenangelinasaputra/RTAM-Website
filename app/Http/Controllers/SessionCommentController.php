<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionComment;
use Illuminate\Support\Facades\Auth;

class SessionCommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required|string',
            'session_id' => 'required|string',
            'comment' => 'required|string|max:1000',
        ]);

        if (!Auth::check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $comment = new SessionComment();
        $comment->day = $request->day;
        $comment->session_id = $request->session_id;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::id();
        $comment->save();

        return response()->json(['message' => 'Comment submitted successfully!']);
    }
}
