<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class ListingController extends Controller
{
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create() {
        return view('listings.create');
    }

    public function store(Request $request) {
        $formInputs = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required', 
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formInputs['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formInputs);

        
        //Flash message
        //Session::flash('message', 'Listed created succesfully!');

        return redirect('/')->with('message', 'Listed created succesfully!');
    }
}
