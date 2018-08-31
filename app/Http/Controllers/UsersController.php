<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        
        $histories = $user->histories()->orderBy('created_at', 'desc')->get();

        $data = [
            'user' => $user,
            'histories' => $histories,
        ];

        // dd($histories);
        return view('users.show', $data);
    }
    
    public function map($id)
    {
        $user = User::find($id);

        $data = [
            'user' => $user,
        ];

        return view('maps.map', $data);
    }
}
