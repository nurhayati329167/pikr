<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Message;
use App\Events\ChatEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(){
        $level = '3';
        $data['friends'] = User::where('level', $level)->get();

        return view('konselor.chat', $data);
    }

    public function remaja(){
        $level = '2';
        $data['friends'] = User::where('level', $level)->get();
        return view('remaja.chat', $data);
    }

    public function saveMessage(Request $request){
        $roomId = $request->roomId;
        $message = $request->message;
        $userId = auth()->user()->id;

        broadcast(new SendMesssage($roomId, $userId, $message));

        Message::create([
            "room_id" => $roomId,
            "user_id" => $userId,
            "message" => $message
        ]);

        return response()->json([
            "success" =>true,
            "message" => "Message success stored"
        ]);
    }

    public function loadMessage($roomId){
        $message = Message::where("room_id", $roomId)->orderBy("updatet_at", "asc")->get();
        return response()->json([
            "success" =>true,
            "data" => $message
        ]);
    }
}
