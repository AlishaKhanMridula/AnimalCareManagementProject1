<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function make(){
      return view('donation.make');
    }
    public function store(Request $request){
      /*$donation=new Donation;
      $donation -> name = $request->name;
      $donation->email= $request->email;
      $donation->number=$request->number;
      $donation->string=$request->string;
      $donation->text=$request->text;
      $donation->digit=$request->digit;
      $donation->save();*/

      dd('Successfullu Submitted Data');
    }
}
