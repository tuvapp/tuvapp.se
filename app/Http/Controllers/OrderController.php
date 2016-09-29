<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Classes\Alert;

class OrderController extends Controller
{
	private $_items = [
    		"< 5",
    		"5-10",
    		"10-20",
    		"20-50",
    		"> 50"
    	];

    public function index() {
    	$items = $this->_items;
    	return view('order', compact('items'));
    }

    public function send(Request $request) {
    	if (!in_array($request->number_of_items, $this->_items))
    		return redirect('/order')->with('status', Alert::create('danger', 'Något gick snett! Vänligen försök igen.'));

    	// Will return if fail
    	$this->validate($request, [
    			"name" => "required|max:255",
    			"email" => "required|email",
    			"address" => "max:255",
    			"postal_number" => "max:6",
    			"city" => "max:255",
    			"number_of_items" => "required|max:5"
    		]);

    	// Everything is clear
    	// Post order to mail the responsible of orders

    	return redirect('/order')->with('status', Alert::create('success', 'Du har skickat din förfrågan. Vi återkommer så snart vi kan med prisinformation mm!'));
    }
}
