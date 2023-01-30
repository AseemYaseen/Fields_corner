<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use App\Models\Reservations;
use App\Models\Playgrounds;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($id)
    {
        $Playgrounds = Playgrounds::findOrfail($id);
        // dd($Playgrounds);
        return view('puplicUser.reservation',['Playgrounds'=>$Playgrounds]); 

    }
    public function create(Request $request,$id)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'max:10' ,'min:10'],
            'Start_date' => ['required'],
            'End_date' => ['required'],
        ]);

// dd($request->user_id);
        $data = Playgrounds::findOrfail($id);
      
// dd($price);
        $user=$request->user_id;
        Reservations::create([

            'first_name' => $request->first_name,
            'user_id' => $user,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'Start_date' => $request->Start_date,
            'End_date' => $request->End_date,
            'playground_id' => $id,


        ]);
return response('ok');
        // return redirect()->route('user.profile.index');
    }
}
