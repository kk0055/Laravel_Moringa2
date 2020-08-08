<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function submit(Request $request)
    {
      $this->validate($request,[
          'name' => 'required',
          'kana' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'detail' => 'required',
      ]);
     $message = new Message;
     $message->name = $request->input('name');
     $message->kana = $request->input('kana');
     $message->email = $request->input('email');
     $message->phone = $request->input('phone');
     $message->detail = $request->input('detail');

     $message->save();
      
     return redirect('/')->with('success','お問い合わせを受け付けました');
    }

 public function messages()
 {
     $messages = Message::all();

     return view('messages')->with('messages',$messages);
 } 
}
