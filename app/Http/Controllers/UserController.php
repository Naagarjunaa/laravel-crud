<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $req)
    {
        if ($req->hasFile("image")) {
            User::updateAvatar($req->image);
        }
        return redirect()->back();
    }
}
