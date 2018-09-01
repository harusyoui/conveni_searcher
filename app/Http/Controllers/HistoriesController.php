<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class HistoriesController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $histories = $user->histories()->orderBy('created_at', 'desc');

            $data = [
                'user' => $user,
                // 'histories' => $histories,
            ];
            return view('maps.map', $data);
        }else {
            return view('welcome');
        }
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);
        
        $request->user()->histories()->create([
            'content' => $request->content,
        ]);
        
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $history = \App\History::find($id);

        if (\Auth::id() === $history->user_id) {
            $history->delete();
        }

        return redirect()->back();
    }
}
