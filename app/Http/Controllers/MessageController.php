<?php

namespace App\Http\Controllers;

use App\Services\MessageService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function store(Request $request)
    {
        $this->messageService->validateAndCreateMessage($request);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function index()
    {
        $messages = $this->messageService->getAllMessages();
        return view('messages.index', compact('messages'));
    }
}