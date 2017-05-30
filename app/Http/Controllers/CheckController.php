<?php

namespace App\Http\Controllers;

use App\Code;
use App\Naw;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function check(Request $request) {

        $id = $request->code;
        $check = Code::where('id', $id);
        $used = Code::find($id);
        if($check->count() && $used['used'] == 0){

            $check->update(['used' => 1]);

            return view('pages.naw');

        }
        else{

            flash('Code niet juist, probeer een andere code')->error();
            return view('pages.content');

        }
    }

    public function naw(Request $request){

        $this->validate(request(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique',


        ]);

        $user = request(['fristname', 'lastname', 'email']);

        $user = Naw::create($user);

        return view('/location');




    }

}
