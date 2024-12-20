<?php

namespace App\Http\Controllers;

use App\Models\Message;  // Assuming you have a Message model
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        // Retrieve messages from the database or a predefined array
        $messages = Message::latest()->limit(7)->get(); // Adjust as necessary
        
        // Return the view and pass the messages data
        return view('dashboard', compact('messages'));
    }
}
