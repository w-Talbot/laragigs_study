<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Show all listings
    public function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(8)
        ]);
    }

    //Show single listings
    public function show(Listing $listing){
        return  view( 'listings.show', [
            'listing' => $listing
        ]);
    }

    //Show create form:
    public function create(){
        return view('listings.create');
    }

    //Store listing data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);
        return redirect('/listings')->with('message_success_wt', 'Listing Created Successfully!s');
    }

    //Show Edit
    public function edit(Listing $listing){
        return view('listings.edit',['listing' => $listing]);
    }

    //Update
    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);
        return back()->with('message_success_wt', 'Listing Updated Successfully!s');
    }

    //Delete Listing
    public function destroy(Listing $listing){
    $listing->delete();
    return redirect('/listings')->with('message_success_wt', 'Listing Deleted Successfully!');
    }

}

