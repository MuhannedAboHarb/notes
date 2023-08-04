<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //
    public function index ()
    {
        $notes = Note::all();   
        return view('index',compact('notes'));
    }

    public function create ()
    {
        return view('create');    
    }

    public function store (Request $request)
    {
        $note=new Note();
        $note->description= $request->post('description');
        $note->save();
        return redirect('index');
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('edit', compact('note'));
    }
    

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->description = $request->input('description');
        $note->save();
        return redirect()->route('index');
    }



    public function destroy($id)
{ 
    $note = Note::find($id);
    $note->delete();
    return redirect()->route('index');
}


}
