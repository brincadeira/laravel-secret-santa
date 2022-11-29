<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santa;
use App\Models\Recipient;

class ApiController extends Controller
{
    public function getSanta($id) {
        if (Santa::where('id', $id)->exists()) {
            $santa = Santa::where('id', $id)->get();
            $recipientId = Recipient::where('id', $id)->pluck('recipient_id');
            $recipient = Santa::where('id', $recipientId)->get();
            return response()->json([
                "santa" => $santa,
                "recipient" => $recipient
            ], 200);
        } else {
            return response()->json([
              "message" => "Santa not found"
            ], 404);
        }
    }
}
