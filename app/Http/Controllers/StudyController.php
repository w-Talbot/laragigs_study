<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudyController extends Controller
{
    //Show all studies
    public function index(){
        return view('studies.index', [
            'studies' => Study::latest()->filter(request(['tag', 'search']))->paginate(8)
        ]);
    }

    //Show single studies
    public function show(Study $study){
        return  view( 'studies.show', [
            'study' => $study
        ]);
    }

    //Show create form:
    public function create(){
        return view('studies.create');
    }

    //Store Study data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Study::create($formFields);
        return redirect('/studies')->with('message_success_wt', 'Study Created Successfully!s');
    }

    //Show Edit
    public function edit(Study $study){
        return view('studies.edit',['study' => $study]);
    }

    //Update
    public function update(Request $request, Study $study){

        //Make sure logged in user is owner
        if($study->user_id != auth()->id()){
            abort(403, 'Unauthorized Action!');
        }

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

        $study->update($formFields);
        return back()->with('message_success_wt', 'Study Updated Successfully!s');
    }

    //Delete Study
    public function destroy(Study $study){

        //Make sure logged in user is owner
        if($study->user_id != auth()->id()){
            abort(403, 'Unauthorized Action!');
        }
        $study->delete();
        return redirect('/studies')->with('message_success_wt', 'Study Deleted Successfully!');
    }

    //manage studies
    public function manage(){
        return view('studies.manage', ['studies' => auth()->user()->studies()->get()]);
    }
}
