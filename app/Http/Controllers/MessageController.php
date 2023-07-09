<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function new_message(Request $request)
    {
        $credentials = $request->validate([
            // 'message' => ['required'],
            'exp_id' => ['required'],
            'dest_id' => ['required'],
        ]);
        $message_type = 'text';
        $file_path = '';
        $image = $request->file('image');
        if ($image) {
            $message_type = 'image';
            $file_path = $request->file('image')->store('public/messages/images');
        }
        Message::create([
            'message' => $request->message,
            'exp_id' => $request->exp_id,
            'dest_id' => $request->dest_id,
            'message_type' => $message_type,
            'file_path' => $file_path,
        ]);
        return response()->json(['message' => 'success']);
    }


    public function chats()
    {
        $lastMessages = DB::table('messages')
        ->select('messages.*', 'users_exp.nom AS exp_nom', 'users_exp.prenom AS exp_prenom', 'users_exp.email AS exp_email', 'users_dest.nom AS dest_nom', 'users_dest.prenom AS dest_prenom', 'users_dest.email AS dest_email')
        ->leftJoin('users AS users_exp', 'messages.exp_id', '=', 'users_exp.id')
        ->leftJoin('users AS users_dest', 'messages.dest_id', '=', 'users_dest.id')
        ->whereIn('messages.id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('messages')
                ->groupBy(DB::raw('LEAST(exp_id, dest_id), GREATEST(exp_id, dest_id)'));
        })
        ->orderBy('messages.created_at', 'desc')
        ->get();
        return response()->json($lastMessages);
    }
    public function index()
    {
        $user = Auth::guard('api')->user();

        $messages = Message::where(function ($query) use ($user) {
            $query->where('exp_id', $user->id)
                ->orWhere('dest_id', $user->id);
        })->get();

        return response()->json($messages);
    }
    public function nombre($id)
    {
        $messages = Message::where(function ($query) use ($id) {
            $query->where('exp_id', $id)
                ->orWhere('dest_id', $id);
        })->get();

        return response()->json(['nombre' => $messages->count()]);
    }
    public function show($id)
    {
        $messages = Message::where(function ($query) use ($id) {
            $query->where('exp_id', $id)
                ->orWhere('dest_id', $id);
        })
        ->orderBy('created_at', 'asc')
        ->get();
        return response()->json($messages);
    }
    public function show_admin($id1,$id2)
{
    $messages = Message::where(function ($query) use ($id1, $id2) {
        $query->where(function ($query) use ($id1, $id2) {
            $query->where('exp_id', $id1)
                ->where('dest_id', $id2);
        })->orWhere(function ($query) use ($id1, $id2) {
            $query->where('exp_id', $id2)
                ->where('dest_id', $id1);
        });
        
    })->orderBy('created_at', 'asc')->get();

    return response()->json($messages);
}


    public function destroy($id)
    {
        $message = Message::findOrFail($id); // Récupère un message par son ID

        // Logique pour supprimer le message

        return response()->json('Message supprimé avec succès');
    }
}
