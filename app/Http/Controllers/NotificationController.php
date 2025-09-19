<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function read($notification)
    {
        $check = notification::where('id', $notification)->first();
        if ($check != null) {
            if ($check->user_id != Auth::user()->id) {
                return redirect()->back()->with("error", "");
            }
            $check->update([
                "status" => 1
            ]);
        }
        $unreadnotifications = Auth::user()->notifications->where('status' , 0);
        $readnotifications = Auth::user()->notifications->where('status' , 1);
        return view('notifications.read', compact('check' , "unreadnotifications" , "readnotifications"));
    }
}
