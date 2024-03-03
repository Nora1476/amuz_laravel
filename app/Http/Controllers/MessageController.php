<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    // get요청
    public function sendMessageForm()
    {
        return view('message');
    }

    // post요청
    public function storeMessage(Request $request)
    {

        // 요청에서 데이터 추출
        $data = $request->only([
            'msg_recivenum',
            'msg_sendnum',
            'msg_title',
            'msg_text',
            'msg_sendoption'
        ]);
        // 이미지 파일 가져오기
        $images = $request->file('images');


        // 데이터 유효성 검사
        $validatedData = $request->validate([
            'msg_recivenum' => 'required|string',
            'msg_sendnum' => 'required|string',
            'msg_title' => 'required|string|max:30',
            'msg_text' => 'required|string',
            'msg_sendoption' => 'required|in:즉시발송,예약발송',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $message = Message::create($data);


        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('message_img'), $imageName);
                $imagePath = 'message_img/' . $imageName;
                // 메시지와 이미지 사이의 관계를 설정하고 이미지를 저장
                $message->images()->create(['path' => $imagePath]);
            }
            // vue에서 axios로 파일 전송 완료 후 컨트롤
            // return redirect()->route('message')->with('success', '파일이 성공적으로 업로드되었습니다.');
        }
        // return redirect()->route('message')->with('success', '파일이 성공적으로 업로드되었습니다.');

    }
}
