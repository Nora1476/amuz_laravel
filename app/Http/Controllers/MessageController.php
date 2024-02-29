<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function sendMessageForm()
    {
        return view('message');
    }
    public function storeMessage(Request $request)
    {
        $validatedData = $request->validate([
            'msg_recivenum' => 'required|string',
            'msg_sendnum' => 'required|string',
            'msg_title' => 'required|string|max:30',
            'msg_text' => 'required|string',
            'msg_sendoption' => 'required|in:즉시발송,예약발송',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        // Create a new message
        $message = new Message();
        $message->msg_recivenum = $validatedData['msg_recivenum'];
        $message->msg_sendnum = $validatedData['msg_sendnum'];
        $message->msg_title = $validatedData['msg_title'];
        $message->msg_text = $validatedData['msg_text'];
        $message->msg_sendoption = $validatedData['msg_sendoption'];
        $message->save();


        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('message_img'), $imageName);
                $imagePath = 'message_img/' . $imageName;
                // 메시지와 이미지 사이의 관계를 설정하고 이미지를 저장
                $message->images()->create(['path' => $imagePath]);
            }
            return 'Images uploaded successfully.';
        } else {
            return 'No images selected.';
        }

    }
}
