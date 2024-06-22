<?php

namespace App\Services;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageService
{
    public function validateAndCreateMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        return Message::create($request->all());
    }

    public function getAllMessages()
    {
        $messages = Message::all();
    
        foreach ($messages as $message) {
            $message->formatted_date = $message->created_at->format('d.m.Y H:i');
        }
    
        return $messages;
    }
}