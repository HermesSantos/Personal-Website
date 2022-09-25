<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function getUsers(Request $request)
    {
        $data = User::where('id', '>', '90')->get();
        return response()->json($data);
    }
}
