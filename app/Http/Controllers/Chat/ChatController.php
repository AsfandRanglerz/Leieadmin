<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\Chat;
use App\Models\Chat\ChatMessage;
use App\Models\MessageFile;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    public function getChats()
    {
         
        $chats = Chat::with(['sender','receiver'])->where('sender_id',auth()->id())->where('sender_deleted','active')->orwhere('receiver_id',auth()->id())->where('receiver_deleted','active')->orderBy('updated_at','desc')->get();

        return view('frontend.front_panel_files.messages_listing')->with(['chats'=>$chats]);
    }


    public function chat($id){
        $authId = Auth::id();
        if(Chat::where([['sender_id',$authId],['receiver_id',$id]])->orWhere([['sender_id',$id],['receiver_id',$authId]])->doesntExist()){
            Chat::create([
                'sender_id'=> $authId,
                'receiver_id' => $id,
            ]);
        }

        return redirect()->route('messages');
    }
    public function saveMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'receiver_id' => 'required',
            'chat_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()->first()]);
        }
        $senderID = auth()->id();
        $receiverID = $request->receiver_id;
        $chat = Chat::where('id',$request->chat_id)->first();
        Chat::update_timestamp($chat->id);
        if ($chat) {
//            dd('inside chat');
            $data = [
                'chat_id' => $chat->id,
                'sender_id' => $senderID,
                'receiver_id' => $receiverID,
                'message' => $request->message,
//                'type' => (!empty($request->file)) ? 'file' : 'text',
            ];
            $message = ChatMessage::create($data);

            $chats = ChatMessage::with(['sender','receiver'])->where('id',$message->id)->first();
            $messages = view('frontend.front_panel_files.new_message')->with('chat',$chats)->render();
            $chats = Chat::with(['sender','receiver'])->where('sender_id',auth()->id())->where('sender_deleted','active')->orwhere('receiver_id',auth()->id())->where('receiver_deleted','active')->orderBy('updated_at','desc')->get();
            return response()->json(['status' => true, 'message' => $messages, 'chats'=>$chats]);
        }

    }

    public function getMessages($id){
//        dd($id);
        $chats = ChatMessage::with(['sender','receiver'])->where('sender_id',Auth::id())->where('sender_deleted','active')->where('receiver_id',$id)->orwhere('sender_id',$id)->where('receiver_id',Auth::id())->where('receiver_deleted','active')->get();
//        dd($chats);
        $messages = view('frontend.front_panel_files.chat')->with('chats',$chats)->render();
        return response()->json(['success'=>true,'messages'=>$messages]);
    }
    public function deleteChatedUser($id){

        if(Chat::where('sender_id',auth()->id())->where('receiver_id',$id)->first()){
            $sender=Chat::where('sender_id',auth()->id())->where('receiver_id',$id)->first();
            Chat::find($sender->id)->update(['sender_deleted'=>'delete']);
            return response()->json('Deleted Successfully');
        }elseif (Chat::where('receiver_id',auth()->id())->where('sender_id',$id)->first()){
            $receiver=Chat::where('receiver_id',auth()->id())->where('sender_id',$id)->first();
            Chat::where('id',$receiver->id)->update(['receiver_deleted'=>'delete']);
            return response()->json('Deleted Successfully');
        }

    }
    public function deleteMessage($id){
         $sender=ChatMessage::where('id',$id)->where('sender_id',auth()->id())->first();
         if ($sender){
            // ChatMessage::find($id)->update(['sender_deleted'=>'delete']);
             ChatMessage::find($id)->delete();
         }else{
             ChatMessage::find($id)->update(['receiver_deleted'=>'delete']);
         }
         if(ChatMessage::where('id',$id)->where('sender_deleted','delete')->where('receiver_deleted','delete')->first()){
             ChatMessage::find($id)->delete();
         }

         return response()->json('delete');
    }
    public function getUsers(){
        $chats = Chat::with(['sender','receiver'])->where('sender_id',auth()->id())->where('sender_deleted','active')->orwhere('receiver_id',auth()->id())->where('receiver_deleted','active')->orderBy('updated_at','desc')->get();
        return view('frontend.front_panel_files.chated_users')->with(['chats'=>$chats]);

    }

}
