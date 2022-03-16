<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function commentForm()
    {
        return view('user.commentForm');
    }

    public function storeCommentForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message1' => 'required',
        ]);

        $input = $request->all();

        Comment::create($input);

        //  Send mail to admin
        Mail::send('mail.comment-mail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message1' => $input['message1'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('admin@caesar.ee', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Сообщение отправлено успешно!']);
    }
}
