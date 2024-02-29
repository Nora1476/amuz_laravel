<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendMessageForm()
    {
        return view('message');
    }
    public function sendUploadMessage(Request $request)
    {
        echo "<script>console.log( 'PHP_Console: " . $request . "' );</script>";

        // 입력 필드 유효성 검사 및 업로드
        $request->validate([
            'msg_recivenum' => 'required|numeric',
            'msg_sendnum' => 'required|numeric',
            'msg_title' => 'required|string|max:30',
            'msg_text' => 'required|string',
            'msg_sendoption' => 'required|in:즉시발송,예약발송',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $message = new Message();
        $message->msg_recivenum = $request->msg_recivenum;
        $message->msg_sendnum = $request->msg_sendnum;
        $message->msg_title = $request->msg_title;
        $message->msg_text = $request->msg_text;
        $message->msg_sendoption = $request->msg_sendoption;
        // Save each image
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('message_img');
            $message->images()->create(['image' => $imagePath]);
        }

        $message->save();

        return redirect()->route('messages.index')->with('success', 'Message created successfully.');


    }

}
