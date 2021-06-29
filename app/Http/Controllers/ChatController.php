<?php

namespace App\Http\Controllers;

use App\Events\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        return view('Chats.index');
    }

    public function push(Request $request)
    {
        $user = User::find(Auth::id());
        event(new Event($request->pesan, $user));
    }
}
