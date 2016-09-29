<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Classes\Alert;

class ContactController extends Controller
{
    public function index() {
    	return view('contact');
    }

    public function send(Request $request) {

        // Will return if fail
    	$this->validate($request, [
    			"firstname" => 'required',
    			"lastname" => 'required',
    			"email" => 'required|email',
    			"subject" => 'required',
    			"message" => 'required'
    		]);

        // Everything is clear
    	// Post email to the responsible
    	
    	return redirect('/contact')->with('status', Alert::create('success', '<b>Du har skickat iväg ditt meddelande.</b> Vi kontaktar dig så fort vi kan!'));
    }
}
