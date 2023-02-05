<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santa;
use App\Models\Recipient;

class ApiController extends Controller
{
    public function getSanta($id) {
        if (Santa::where('id', $id)->exists()) {
            $santa = Santa::find($id);
            $recipientId = $santa->recipient()->first();
            $recipient = $recipientId->santa()->first();
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
