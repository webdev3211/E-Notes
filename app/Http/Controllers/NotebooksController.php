<?php

namespace App\Http\Controllers;
use App\Notebook;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotebooksController extends Controller
{
    public function index(){

      $user = Auth::user(); //get the id of current login user
      $notebooks = $user->notebooks;  //caling the notebooks function from the user model

      return view('notebooks.index', compact('notebooks'));
    }


    public function create(){
      return view('notebooks.create');
    }

    public function show($id){
        $notebook = Notebook::findOrFail($id);
        $notes = $notebook->notes; //this will call the notes method defined in the Notebook Model
      return view('notes.index',compact('notes', 'notebook'));
    }

    public function store(Request $request){
        $dataInput = $request->all();
        $user = Auth::user(); //get the id of current login user
        $user->notebooks()->create($dataInput);        
        
        // Notebook::create($dataInput);
       return redirect('/notebooks');
    }

    public function edit($id){
      $user = Auth::user(); //get the id of current login user
      $notebook = $user->notebooks()->find($id);      
      // $notebook = Notebook::findOrFail($id);
      return view('notebooks.edit')->with('notebook', $notebook);
    }

    public function update(Request $request, $id)
    {
      $user = Auth::user(); //get the id of current login user
      $notebook = $user->notebooks()->find($id);      
      // $notebook=Notebook::where('id',$id)->first();
      $notebook->update($request->all());
      return redirect('/notebooks');
    }

    public function destroy($id){
      // $notebook=Notebook::where('id',$id)->first();
      $user = Auth::user(); //get the id of current login user
      $notebook = $user->notebooks()->find($id);      
      
      $notebook->delete();
      return redirect('/notebooks');      
    }


}
