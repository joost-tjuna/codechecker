<?php

namespace App\Http\Controllers;

use App\Mail\Loser;
use App\Mail\Winner;
use App\Naw;
use Illuminate\Http\Request;
use App\Location;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    public function location_check($id){


        $user = session('user');

        $ticket = Location::find($id);

        $loser = new Loser($ticket);
        $winner = new Winner($ticket);
        
        $rand = rand(1 , 100);

        If($ticket->ticketAmount > 0 ){

            if($rand <= 15){

                Mail::to($user)->send($winner);
                $amount = $ticket->ticketAmount;
                $amount --;
                $ticket->ticketAmount = $amount;
                $ticket->save();
                flash('Bekijk u email for het resultaat')->success();
                return redirect('/');

            }
            else{

                Mail::to($user)->send($loser);
                flash('Bekijk u email for het resultaat')->success();
                return redirect('/');

            }
        }
        else{

            Mail::to($user)->send($loser);
            flash('Bekijk u email for het resultaat')->success();
            return redirect('/');

        }

    }
}
